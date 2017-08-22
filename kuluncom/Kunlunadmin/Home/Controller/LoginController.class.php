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
    	$user=D("Common")->generalquery("admin_user",$where,"u_id",$type="ONE");
    	if($user['status']=="true"){
    		cookie("u_id",$user['message']['u_id'],array('expire'=>3600));
    	}
    	$this->redirect('Index/index', "", 0, '');
    }


}