<?php
namespace Web\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    $banner=$this->banner();
    $content=$this->hots();
    $this->assign("banner",$banner);
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
    	$res=D("Common")->queryjoin("content","kl_admin_user","u_id","u_id",true,"kl_content.u_id,title,content,head_img,ftime,nickname,read",$type="all");
    	foreach($res as $key=>$val){
    		$res[$key]['content']=mb_substr(strip_tags($res[$key]['content']),0,50,'utf-8');
    	}
    	return $res;
    }
}
