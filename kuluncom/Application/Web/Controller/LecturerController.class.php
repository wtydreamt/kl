<?php
namespace Home\Controller;
use Think\Controller;
class LecturerController extends Controller {
    public function index(){
	$this->display('proflie');
    }

    public function edit(){
		$data=I();
		if($data && isset($data)){
			$arr=D("Common")->fileUpload("head_img",'head_img');
			print_r($arr);
		}else{
	    	$label=D("Common")->generalquery("label",true,true,"all");
	    	$label=$label['status']=="true"?$label['message']:"";
	    	$this->assign("label",$label);			
			$this->display("edit");
		} 
    }
}