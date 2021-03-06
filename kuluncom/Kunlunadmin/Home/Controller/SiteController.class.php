<?php
namespace Home\Controller;
use Think\Controller;
class SiteController extends CommonController {
    public function index(){
	$this->display();
    }
    public function banner(){
        $data=I();
        $Offset="10";
        $page=isset($data['page'])?$data['page']:1;
        if($page>1){
            $start=($page-1)*$Offset;
        }else{
            $start=0;
        }
        $count=M("banner")
             ->count();
        $arr=M("banner")
             ->limit($start,$Offset)
             ->select();
        $datainfo=array();
        $datainfo['data']=$arr;
        $datainfo['page']=$page;
        $datainfo['pagenumer']=ceil($count/$Offset);
        $this->assign("listdata",$datainfo);
    	$this->display("bannerlist");
    }
    public function banneradd(){
		$data=I();
		if($data && isset($data)){
			$arr=D("Common")->fileUpload("banner_img",'banner_img');
			if($arr['msg']=="1"){
				$data['banner_img']=$arr['success'];
			}
			$banner=D("Common")->adddata("banner",$data);
    		if($banner['status']=="true"){
    			$this->success("添加成功","banneradd");
    		}else{
    			$this->success("添加失败","banneradd");
    		}			
		}else{
			$this->display("banneradd");
		}    	
    }

    public function chief(){
		$data=I();
		if($data && isset($data)){
			$arr=D("Common")->fileUpload("cover_img",'cover_img');
			if($arr['msg']=="1"){
				$data['cover_img']=$arr['success'];
			}
			$banner=D("Common")->adddata("chief",$data);
    		if($banner['status']=="true"){
    			$this->success("添加成功","chief");
    		}else{
    			$this->success("添加失败","chief");
    		}
		}else{
			$admin_user=D("Common")->generalquery("admin_user",true,"u_id,nickname","all");
			$this->assign("admin_user",$admin_user['message']);
			$this->display("chief");
		}    	
    	
    }
    
    public function chieflist(){
        $arr=M("chief")
             ->join("kl_admin_user as a ON kl_chief.u_id=a.u_id")
             ->field("a.nickname,cover_img,id,is_show,position")
             ->select();
            $this->assign("chief",$arr);
            $this->display("chieflist");      
    }

    public function delchief(){
        $id=I("id");
        $res=M("chief")->where(array("id"=>$id))->delete();
        if($res){
            echo "ok";
        }else{
            echo "no";
        }
    }

    public function saveshow(){
        $data=I();
        if($data['is_show']=="1"){
            $save=array("is_show"=>0);
        }else{
            $save=array("is_show"=>1);
        }
        $res=M("chief")->where(array("id"=>$data['id']))->save($save);
        if($res!==false){
            echo "ok";
        }else{
            echo "no";
        }
    }

    public function delbanner(){
        $id=I("id");
        $res=M("banner")->where(array("id"=>$id))->delete();
        if($res){
            echo "ok";
        }else{
            echo "no";
        }        
    }
    public function savebanner(){
        $data=I();
        // print_r($data);
        if($data['is_show']=="1"){
            $save=array("is_show"=>0);
        }else{
            $save=array("is_show"=>1);
        }
        $res=M("banner")->where(array("id"=>$data['id']))->save($save);
        if($res!==false){
            echo "ok";
        }else{
            echo "no";
        }
    } 

    public function evaluate(){
            $admin_user=D("Common")->generalquery("admin_user",true,"u_id,nickname","all");
            $this->assign("admin_user",$admin_user['message']);
            $this->display("evaluate");
    }

    public function addevaluate(){
        $arr=I();
        $arr['datetimes']=date("Y-m-d H:i:s");
        $res=M("evaluate")->add($arr);
        if($res){
            echo "添加成功";
        }else{
            echo "添加失败";
        }
    }   
}