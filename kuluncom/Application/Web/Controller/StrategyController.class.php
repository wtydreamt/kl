<?php
namespace Home\Controller;
use Think\Controller;
class StrategyController extends Controller {
    public function index(){
	$this->display();
    }

    public function viewpoint(){
     $this->display("viewpoint");
    }

    public function addv(){
		$data=I();
		if($data && isset($data)){
			$res=D("Common")->adddata("viewpoint",$data);
			if($res['status']=="true"){
				echo "添加成功";
			}else{
				echo "添加失败稍后再试";
			}
		}else{
			$this->display("add");
		}    	
    }

}