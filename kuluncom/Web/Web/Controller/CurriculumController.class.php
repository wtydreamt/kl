<?php
namespace Web\Controller;
use Think\Controller;
class CurriculumController extends Controller {
    public function index(){
    $curriculum=D("Common")->queryjoin("curriculum","kl_admin_user","u_id","u_id",true,"kl_admin_user.nickname,kl_admin_user.u_id,kl_curriculum.name,ketime,price",$type="all");
    $this->assign("curriculum",$curriculum);
	$this->display("index");
    }
}