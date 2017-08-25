<?php
namespace Web\Controller;
use Think\Controller;
class CurriculumController extends Controller {
    public function index(){
    $data=I();
    $where=$data['uid']?array("kl_curriculum.u_id"=>$data['uid']):true;
    $page=$data['page']?$data['page']:1;
    $res=D("Common")->queryjoin("curriculum","kl_admin_user","u_id","u_id",$where,"id,kl_admin_user.nickname,kl_admin_user.u_id,kl_curriculum.name,ketime,price,kl_curriculum.img",$type="all",array("yes","5",$page));
    $user=M("curriculum")->field('u_id')->group('u_id')->select();
    $new_user=array();
    foreach($user as $key=>$val){
    	$new_user[]=$val['u_id'];
    }
    $uinfo=M("admin_user")->field('u_id,nickname')->where(array("u_id"=>array("in",$new_user)))->select();
    $this->assign("uinfo",$uinfo);
    $this->assign("curriculum",$res['data']);
    $this->assign("page",$res['pagenumber']);
	$this->display("index");
    }

    public function info(){
    	$data=I();
    	$res=M("curriculum")->where(array("id"=>$data['id']))->field("u_id,name,ketime,fxrade,starttime,price,desc,kegrade,img,link")->find();
    	$user=M("admin_user")->where(array("u_id"=>$res['u_id']))->field("nickname")->find();
    	$lists=D("Common")->queryjoin("curriculum","kl_admin_user","u_id","u_id",array("kl_admin_user.u_id"=>$res['u_id']),"id,kl_admin_user.nickname,kl_admin_user.u_id,kl_curriculum.name,ketime,price,kl_curriculum.img",$type="all");
    	
    	$menu=M("menu")->where(array("kid"=>$data['id']))->field("title,link,shi")->select();
    	$this->assign("res",$res);
    	$this->assign("user",$user);
   		$this->assign("menu",$menu);
   		$this->assign("lists",$lists);    	    	
    	$this->display('info');
    }
}