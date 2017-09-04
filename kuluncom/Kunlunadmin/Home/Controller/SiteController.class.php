<?php
namespace Home\Controller;
use Think\Controller;
class SiteController extends Controller {
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
    			echo "添加成功";
    		}else{
    			echo "添加失败";
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
    			echo "添加成功";
    		}else{
    			echo "添加失败";
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
}