<?php
namespace Home\Controller;
use Think\Controller;
class CategoryController extends Controller {
    public function index(){
	$this->display();
    }

    public function viewpoint(){
    $arr=M("viewpoint")->select();
    $this->assign("viewpoint",$arr);  	
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
    public function labe(){
    $arr=M("label")->select();
     $this->assign("label",$arr);  	    	
     $this->display("labe");
    }
    public function labeadd(){
		$data=I();
		if($data && isset($data)){
			$res=D("Common")->adddata("label",$data);
			if($res['status']=="true"){
				echo "添加成功";
			}else{
				echo "添加失败稍后再试";
			}
		}else{
			$this->display("labeadd");
		}    	
    }
    public function system(){
		$data=I();
		if($data && isset($data)){
			$res=D("Common")->adddata("system",$data);
			if($res['status']=="true"){
				echo "添加成功";
			}else{
				echo "添加失败稍后再试";
			}
		}else{
			$this->display("system");
		}     	
    }       
}