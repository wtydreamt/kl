<?php
namespace Web\Controller;
use Think\Controller;
class LecturerController extends Controller {
    public function index(){
    // $lecturer=D("Common")->generalquery("admin_user",true,"u_id,nickname,autograph,describe,head_img","all");
    $lecturer=M("admin_user")->field("u_id,nickname,autograph,describe,head_img")->order("sort_s desc")->select();
    $this->assign("lecturer",$lecturer);
	$this->display('index');
    }

    public function lecturer(){
        $id=I("get.u_id");
        $res=D("Common")->queryjoin("content","kl_admin_user","u_id","u_id",array("kl_content.u_id"=>$id),"kl_content.u_id,kl_content.id,title,content,head_img,laud,ftime,nickname,read",$type="ONE");
        $lecture=D("Common")->qeruylecturer(array("u_id"=>$id));
        $this->assign("lecture",$lecture);
        $this->assign("labe",$lecture['labe']);
        $this->assign("content",$res);
        $this->display('Info/index');
    }
}