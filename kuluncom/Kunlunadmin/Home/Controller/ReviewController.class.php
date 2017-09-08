<?php
namespace Home\Controller;
use Think\Controller;
class ReviewController extends CommonController {
		private $u_id;
		public function __construct(){
			parent::__construct();
			$this->u_id=cookie("u_id");

		}	
	    public function index(){ 
		$data=I();
		if($data && isset($data)){
			$arr=D("Common")->fileUpload("review_img",'review_img');
			if($arr['msg']=="1"){
				$data['review_img']=$arr['success'];
			}
			$data['u_id']=$this->u_id;
			$res=D("Common")->adddata("review",$data);
			if($res['status']=="true"){
				// echo "添加成功";
				$this->redirect('Review/index', "", 0, '');
			}else{
				// echo "添加失败稍后再试";
				$this->redirect('Review/index', "", 0, '');
			}			
		}else{
		    $system=D("Common")->generalquery("system",true,true,"all");
	    	$system=$system['status']=="true"?$system['message']:"";
	    	$this->assign("system",$system);
			$this->display();
		} 	       	

    }
}