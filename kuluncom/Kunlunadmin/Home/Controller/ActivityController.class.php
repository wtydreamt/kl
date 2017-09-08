<?php
namespace Home\Controller;
use Think\Controller;
class ActivityController extends CommonController {
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
			$data['content']=$_POST['content'];
			$res=D("Common")->adddata("activity",$data);
			if($res['status']=="true"){
				$this->redirect('Activity/index', "", 0, '');
			}else{
				$this->redirect('Activity/index', "", 0, '');
			}			
		}else{
			$this->display();
		} 	       	

    }         
}
