<?php
namespace Home\Controller;
use Think\Controller;
class ActivityController extends Controller {
		private $u_id;
		public function __construct(){
			parent::__construct();
			$this->u_id=cookie("u_id");

		}	
	    public function index(){ 
		$data=I();
		if($data && isset($data)){
			$arr=D("Common")->fileUpload("activity_img",'activity_img');
			if($arr['msg']=="1"){
				$data['activity_img']=$arr['success'];
			}
			$data['u_id']=$this->u_id;
			$res=D("Common")->adddata("activity",$data);
			if($res['status']=="true"){
				// echo "添加成功";
				$this->redirect('Activity/index', "", 0, '');
			}else{
				// echo "添加失败稍后再试";
				$this->redirect('Activity/index', "", 0, '');
			}			
		}else{
			$this->display();
		} 	       	

    }         
}