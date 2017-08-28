<?php
namespace Home\Controller;
use Think\Controller;
class LecturerController extends Controller {
	private $u_id;
	public function __construct(){
		parent::__construct();
		$this->u_id=cookie("u_id");

	}
    public function index(){
    $admin_user=D("Common")->generalquery("admin_user",array("u_id"=>$this->u_id),true,"one");
    if($admin_user['status']=="true"){
    	$admin_user=$admin_user['message'];
    	$label=D("Common")->generalquery("label",array("id"=>array("in",$admin_user['labe'])),true,"all");
    	if($label['status']=="true"){
    		$label=$label['message'];
    	}else{
    		$label="";
    	}
    }else{
    	$admin_user="";
    }
    $this->assign("data",array("admin_user"=>$admin_user,"label"=>$label));
	$this->display('proflie');
    }

    public function edit(){
		$data=I();
		if($data && isset($data)){
			if(!empty($data['labe'])){
				$data['labe']=implode($data['labe'], ",");
			}
			$data=array_flip(array_flip($data));
			$arr=D("Common")->fileUpload("head_img",'head_img');
			if($arr['msg']=="1"){
				$data['head_img']=$arr['success'];
			}
			$res=D("Common")->generasave("admin_user",array("u_id"=>$this->u_id),$data);
			if($res){
				$this->redirect('Lecturer/index', "", 0, '');
			}else{
				$this->redirect('Lecturer/edit', "", 0, '');
			}
		}else{
	    	$label=D("Common")->generalquery("label",true,true,"all");
	    	$admin_user=D("Common")->generalquery("admin_user",array("u_id"=>$this->u_id),true,"one");
	    	$label=$label['status']=="true"?$label['message']:"";
	    	$this->assign("label",$label);
	    	$this->assign("admin_user",$admin_user['message']);		
			$this->display("edit");
		} 
    }
}