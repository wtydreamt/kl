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

    public function reviewlist(){
        $data=I();
        $Offset="10";
        $page=isset($data['page'])?$data['page']:1;
        if($page>1){
            $start=($page-1)*$Offset;
        }else{
            $start=0;
        }
        $count=M("review")
             ->count();
        $arr=M("review")
             ->limit($start,$Offset)
             ->select();
        $datainfo=array();
        $datainfo['data']=$arr;
        $datainfo['page']=$page;
        $datainfo['pagenumer']=ceil($count/$Offset);
        // print_r($datainfo);die;
        $this->assign("reviewlist",$datainfo);
        $this->display("reviewlist");
    }

    public function delreview(){
    	$id=I("id");
    	$res=M("review")->where(array("id"=>$id))->delete();
    		if($res){
    			$this->success("删除成功","reviewlist");
    		}else{
    			$this->success("删除失败","reviewlist");
    		}    	
    }
}