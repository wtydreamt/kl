<?php
namespace Web\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    $menu = C('MENU');
    // print_r($menu);die;
    $banner=$this->banner();
    $content=$this->hots();
    $chief=$this->chief();
    $this->assign("chief",$chief);
    $this->assign("banner",$banner);
    $this->assign("active","1");
    $this->assign("content",$content);
	$this->display();
    }
    public function banner(){
    	 $banner_img=D("Common")->generalquery("banner",true,"banner_img","all");
    	if($banner_img['status']=="true"){
    		return $banner_img['message'];
    	}else{
    		return "";
    	}
    }
    public function hots(){
    	$res=D("Common")->queryjoin("content","kl_admin_user","u_id","u_id",true,"kl_content.u_id,kl_content.id,title,content,head_img,ftime,nickname,read",$type="all");
    	foreach($res as $key=>$val){
    		$res[$key]['content']=mb_substr(strip_tags($res[$key]['content']),0,200,'utf-8');
    	}
    	return $res;
    }
    public function chief(){
        $chief1=D("Common")->generalquery("chief",array("position"=>1,"is_show"=>1),true,"find");
        $chief3=D("Common")->generalquery("chief",array("position"=>3,"is_show"=>1),true,"find");
        $chief2=D("Common")->generalquery("chief",array("position"=>2,"is_show"=>1),true,"all");
        return array("1"=>$chief1['message'],"2"=>$chief2['message'],"3"=>$chief3['message']);
    }
    public function info(){
        $id=I("get.id");
        $res=D("Common")->queryjoin("content","kl_admin_user","u_id","u_id",array("kl_content.id"=>$id),"kl_content.u_id,kl_content.id,title,content,head_img,laud,ftime,nickname,read",$type="ONE");
        $lecture=D("Common")->qeruylecturer(array("u_id"=>$res['u_id']));
        $this->assign("lecture",$lecture);
        $this->assign("labe",$lecture['labe']);
        $this->assign("content",$res);
        $this->display('Info/index');
    }
}
