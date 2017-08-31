<?php
namespace Home\Controller;
use Think\Controller;
class PersonnelController extends Controller {
    public function index(){
    	$role=D("Common")->generalquery("role",true,true,"all");
    	$role=$role['status']=="true"?$role['message']:"";
    	$this->assign("role",$role);
		$this->display();
    }

    public function addpeople(){
    	$data=I();
    	$arr=array();
    	$role_user_derive=array();
    	$this->querynumber($data['number']);
    	$arr['password'] =md5($data['password']);
    	$arr['number']	 =$data['number'];
    	$res=D("Common")->adddata("admin_user",$arr);

    	if($res['status']=="false"){
    		echo "账号添加失败";
    	}else{
    		$role_user_derive['r_id']=$data['r_id'];
    		$role_user_derive['u_id']=$res['message'];
    		$user_role=D("Common")->adddata("role_user_derive",$role_user_derive);
    		if($user_role['status']=="true"){
    			echo "添加成功";
    		}else{
    			echo "角色分配失败";
    		}	
    	}
    }

    public function querynumber($number=""){
    	$where=$number?array("number"=>$number):array("number"=>I("number"));
    	$user=D("Common")->generalquery("admin_user",$where,"u_id","one");
    	if($user['status']=="true"){
    		echo "账号已存在";die;
    	}
    }
    public function personnellist(){
        $data=I();
        $Offset="2";
        $page=isset($data['page'])?$data['page']:1;
        if($page>1){
            $start=($page-1)*$Offset;
        }else{
            $start=0;
        }
        $count=M("admin_user")
             ->join("kl_role_user_derive as r ON kl_admin_user.u_id=r.u_id")
             ->join("kl_role ON r.r_id=kl_role.r_id")
             ->count();
        $arr=M("admin_user")
             ->join("kl_role_user_derive as r ON kl_admin_user.u_id=r.u_id")
             ->join("kl_role ON r.r_id=kl_role.r_id")
             ->field("kl_role.name,kl_admin_user.u_id,kl_admin_user.nickname,number")
             ->limit($start,$Offset)
             ->select();
        $datainfo=array();
        $datainfo['data']=$arr;
        $datainfo['page']=$page;
        $datainfo['pagenumer']=ceil($count/$Offset);
        // print_r($datainfo);die;
        $this->assign("listdata",$datainfo);
        $this->display("personnellist");
    }
}
