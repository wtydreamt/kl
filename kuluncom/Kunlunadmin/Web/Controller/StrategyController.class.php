<?php
namespace Web\Controller;
use Think\Controller;
class StrategyController extends Controller {
    public function index(){
    $viewpoint=M("viewpoint")->field("id,name")->select();
    $data=I();
    $where=$data['id']?array("v_id"=>$data['id']):true;
    $res=D("Common")->queryjoin("content","kl_admin_user","u_id","u_id",$where,"kl_content.u_id,kl_content.id,title,content,head_img,ftime,nickname,read",$type="all");
    foreach($res as $key=>$val){
    		$res[$key]['content']=mb_substr(strip_tags($res[$key]['content']),0,200,'utf-8');
    }
    $this->assign("content",$res);
    $this->assign("viewpoint",$viewpoint);
    $this->assign("id",$data['id']);
	$this->display();
    }
}