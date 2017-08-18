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
			print_r($arr);
		}else{
			$this->display("banneradd");
		}    	
    }
}