<?php
namespace Home\Controller;
use Think\Controller;
class StrategyController extends Controller {
	private $u_id;
	public function __construct(){
		parent::__construct();
		$this->u_id=cookie("u_id");

	}
    public function index(){
     $viewpoint=D("Common")->generalquery("viewpoint",true,true,"all");
     $viewpoint=$viewpoint['status']=="true"?$viewpoint['message']:"";
     $this->assign("viewpoint",$viewpoint);    	
     $this->display("index");
    }

    public function addcontent(){
		$data=I();
		if($data && isset($data)){
			$data['content']=$_POST['content'];
			$data['u_id']=$this->u_id;
			$data['ftime']=date("Y-m-d H:i:s");
			$res=D("Common")->adddata("content",$data);
			if($res['status']=="true"){
				$this->redirect('Strategy/index', "", 0, '');
			}else{
				$this->redirect('Strategy/index', "", 1, '发布失败');
			}
		}else{
			$this->redirect('Strategy/index', "", 0, '');
		}    	
    }

    public function curriculum(){
    	$data=I();
		if($data && isset($data)){
			$data['desc']=$_POST['desc'];
			$data['u_id']=$this->u_id;
			$arr=D("Common")->fileUpload("img",'img');
			if($arr['msg']=="1"){
				$data['img']=$arr['success'];
			}			
			$res=D("Common")->adddata("curriculum",$data);
			if($res['status']=="true"){
				$this->redirect('Strategy/curriculum', "", 0, '');
			}else{
				$this->redirect('Strategy/curriculum', "", 1, '发布失败');
			}
		}else{
			$this->display("curriculum");
		}     	
    }

    public function clist(){
    	$curriculum=D("Common")->generalquery("curriculum",array("u_id"=>$this->u_id),"name,ketime,fxrade,kegrade,starttime","all");
    	$curriculum=$curriculum['status']=="true"?$curriculum['message']:"";
    	$this->assign("curriculum",$curriculum); 
    	$this->display('clist');
    }
}