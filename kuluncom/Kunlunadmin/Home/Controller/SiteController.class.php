<?php
namespace Home\Controller;
use Think\Controller;
class SiteController extends Controller {
    public function index(){
	$this->display();
    }
    public function banner(){
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
}