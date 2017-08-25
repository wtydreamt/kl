<?php
namespace Home\Controller;
use Think\Controller;
class PowerController extends Controller {
    public function index(){
	       $this->display();
    }
    public function rolelist(){
           $this->display();
    }
    public function addrole(){
    	$data=I();
    	$res=D("Common")->adddata("role",$data);
    	echo json_encode($res);
    }
    //节点控制器
    public function nodes(){
        $arr=M("node")->field("id,pid,name")->select();
        $arr=$this->getSubTree($arr , $id = 0 , $lev = 0);
        $this->assign("arr",$arr);
        $this->display("nodes");
    }
    //权限授权
    public function power(){

    }
 /** * 获取子孙树 * @param array $data 待分类的数据 * @param int/string $id 要找的子节点id * @param int $lev 节点等级 */ 
 function getSubTree($data , $id = 0 , $lev = 0) { 

    static $son = array(); 
    foreach($data as $key => $value) { 
        if($value['pid'] == $id){ 
              $value['lev'] = $lev; 
              $value['str'] =str_repeat('---', $lev);
              $son[] = $value;
             $this->getSubTree($data , $value['id'] , $lev+1); } 
        } 
        return $son; 
    }


}
