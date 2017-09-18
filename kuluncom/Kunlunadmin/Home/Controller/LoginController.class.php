<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
    public function index(){
     layout(false);
     $this->display("login");
    }
    public function login(){
    	$data=I();
    	$where=array("number"=>$data['number']);
    	$user=D("Common")->generalquery("admin_user",$where,"u_id,nickname,head_img",$type="ONE");
    	if($user['status']=="true"){
    		cookie("u_id",$user['message']['u_id'],array('expire'=>3600*12));
            $userinfo=array("nickanme"=>$user['message']['nickname'],"head_img"=>$user['message']['head_img']);
            cookie("userinfo",$userinfo,array('expire'=>3600*12));
            $nodelist=$this->nodelist();
            C("MENU",$nodelist);
            // print_r(C("MENU"));die;
            $this->redirect('Index/index', "", 0, '');
    	}else{
            $this->redirect('Login/index', "", 0, '');
        }
    	
    }

    public function loginout(){
        cookie("u_id","0",array('expire'=>0));
        cookie("userinfo","0",array('expire'=>0));
        $this->redirect('Login/index', "", 0, '');
    }

    public function nodelist(){
        $arr=M("node")->field("id,pid,name")->select();
        return $arr=$this->getSubTree($arr , $id = 0 , $lev = 0);
    }
    /** * 获取子孙树 * @param array $data 待分类的数据 * @param int/string $id 要找的子节点id * @param int $lev 节点等级 */ 
    public function getSubTree($data , $id = 0 , $lev = 0) { 
        static $son = array(); 
        foreach($data as $key => $value) { 
            if($value['pid'] == $id){ 
                  $value['lev'] = $lev; 
                  $son[] = $value;
                 $this->getSubTree($data , $value['id'] , $lev+1); } 
            } 
            return $son; 
        }    
}