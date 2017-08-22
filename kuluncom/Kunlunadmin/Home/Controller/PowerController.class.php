<?php
namespace Home\Controller;
use Think\Controller;
class PowerController extends Controller {
    public function index(){
	       $this->display();
    }
    public function rolelist(){
           $this->display();
    }
    public function addrole(){
    	$data=I();
    	$res=D("Common")->adddata("role",$data);
    	echo json_encode($res);
    }
}
