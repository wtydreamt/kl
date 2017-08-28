<?php
namespace Web\Controller;
use Think\Controller;
class ActivityController extends Controller {
	  public function index(){
	  	$activiy=$this->activitycontent();
	  	// print_r($activiy);die;
	  	$this->assign('content',$activiy);
	  	$this->display();
	  }
	    public function activitycontent(){
	    	 $activiy=D("Common")->generalquery("activity",true,"activity_img,content","find");
	    	if($activiy['status']=="true"){
	    		return $activiy['message'];
	    	}else{
	    		return "";
	    	}
	    }	  
}
