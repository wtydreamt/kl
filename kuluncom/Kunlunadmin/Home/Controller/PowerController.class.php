<?php
namespace Home\Controller;
use Think\Controller;
class PowerController extends CommonController {
    public function index(){
        $arr=M("node")->field("id,pid,name")->select();
        $arr=$this->nodelist;
        $arrs=$this->getSbuTrees($arr);
        $this->assign("nodelist",$arrs);
	    $this->display("index");
    }
    public function rolelist(){
           $res_role=M("role")->field("r_id,name")->select();
           $this->assign("res_role",$res_role);
           $this->display();
    }
    public function addrole(){
    	$data=I();
        $arr=array("name"=>$data['name'],"desc"=>$data['desc']);
    	$res=D("Common")->adddata("role",$arr);
        if($res['status']=="true"){
           $res=D("Common")->adddata("role_node",array("r_id"=>$res['message'],"n_id"=>$data['n_id']));
           echo json_encode($res);   
        }else{
            $res=array("status"=>"false");
            echo json_encode($res);
        }
    	
    }
    //节点控制器
    public function nodes(){
        $arr=M("node")->field("id,pid,name")->select();
        $arr=$this->nodelist;
        $this->assign("nodes",$arr);
        $this->display("nodes");
    }
    public function addnode(){
        $data=I();
        echo $res=M("node")->add($data);
    }
    public function listnode(){
        $list=M("node")->field("id,action,controller,name")->select();
        $this->assign("arrs",$list);
        $this->display("nodelist");
    }

    public function getSbuTrees($arr){
        $new_tree=array();
        $new_trees=array();
        foreach($arr as $key=>$val){
            if($val['pid']==0){
                $new_tree[$val['id']]=$val;
            }else{
                 $new_trees[$val['pid']][]=$val;
            }
        }
        foreach($new_tree as $new=>$tree){
                $new_tree[$new]['son_data']=$new_trees[$new];
        }
        return $new_tree;
    }
    public function shownode(){
        $data=I();
        $res=M("role_node")->where(array("r_id"=>$data['r_id']))->field("n_id")->find();
        $node=M("node")->where(array("id"=>array("in",$res['n_id'])))->field("name")->select();
        $str="";
        foreach($node as $no=>$v){
            $str=$str.$v['name'].": :";
        }
        echo  $str;
    }
}
