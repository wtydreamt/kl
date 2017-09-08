<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
     layout(false);
     $this->display("login");
    }
    public function login(){
    	$data=I();
    	$where=array("number"=>$data['number']);
    	$user=D("Common")->generalquery("admin_user",$where,"u_id,nickname,head_img",$type="ONE");
    	if($user['status']=="true"){
    		cookie("u_id",$user['message']['u_id'],array('expire'=>3600*12));
            $userinfo=array("nickanme"=>$user['message']['nickname'],"head_img"=>$user['message']['head_img']);
            cookie("userinfo",$userinfo,array('expire'=>3600*12));
            // print_r(cookie("userinfo"));die;
            $this->redirect('Index/index', "", 0, '');
    	}else{
            $this->redirect('Login/index', "", 0, '');
        }
    	
    }

    public function loginout(){
        cookie("u_id","");
        cookie("userinfo","");
        $this->redirect('Login/index', "", 0, '');
    }

    public function nodelist(){
        
    }
}