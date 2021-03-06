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
        $evaluate=M("evaluate")->where(array("u_id"=>$res['u_id']))->select();
        $count=M("evaluate")->where(array("u_id"=>$res['u_id']))->count();
    	$user=M("admin_user")->where(array("u_id"=>$res['u_id']))->field("nickname")->find();
    	$lists=D("Common")->queryjoin("curriculum","kl_admin_user","u_id","u_id",array("kl_admin_user.u_id"=>$res['u_id']),"id,kl_admin_user.nickname,kl_admin_user.u_id,kl_curriculum.name,ketime,price,kl_curriculum.img",$type="all");
    	$menu=M("menu")->where(array("kid"=>$data['id']))->field("title,link,shi")->select();
        // print_r($evaluate);die;
        $this->assign("count",$count);
    	$this->assign("res",$res);
        $this->assign("evaluate",$evaluate);
    	$this->assign("user",$user);
   		$this->assign("menu",$menu);
   		$this->assign("lists",$lists);    	    	
    	$this->display('info');
    }

    public function curriculum(){
    $data=I();
    $page=$data['page']?$data['page']:1;
    $where=$data['uid']?array("kl_curriculum.u_id"=>$data['uid']):true;
    $res=D("Common")->queryjoin("curriculum","kl_admin_user","u_id","u_id",$where,"id,kl_admin_user.nickname,kl_admin_user.u_id,kl_curriculum.name,ketime,price,kl_curriculum.img",$type="all",array("yes","5",$page));
    echo  json_encode($res);      
    }
    public function curriculuminfo(){
        $data=I();
        $res=M("curriculum")->where(array("id"=>$data['id']))->field("u_id,name,ketime,fxrade,starttime,price,desc,kegrade,img,link")->find();
        $menu=M("menu")->where(array("kid"=>$data['id']))->field("title,link,shi")->select();
      echo  json_encode(array('data'=>$res,"menu"=>$menu)); 
    }
}