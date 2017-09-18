<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public $nodelist;
    public function __construct(){
                parent::__construct();
                $user=cookie("u_id");
                if(!$user){
                    $this->redirect('Login/index', "", 0, '');
                }
                $arr=$this->user_role_node();               
                $this->nodelist=$arr;
                $list=$this->nodelist($arr);
                C("MENU",$list);
    }
    public function nodelist($arr){
        $new_array=array();
        $new_array_two=array();
        foreach($arr as $key=>$val){
            if($val['pid']=='0'){
                $new_array_two[]=$val;
            }else{
                $val['url']=U($val['controller'].'/'.$val['action']);
                $new_array[$val['pid']][]=$val;
            }
        }
        foreach($new_array_two as $two=>$t){
                $new_array_two[$two]['sun_data'][]=$new_array[$t['id']];
        }
       return $new_array_two;
    }
    /** * 获取子孙树 * @param array $data 待分类的数据 * @param int/string $id 要找的子节点id * @param int $lev 节点等级 */ 
    public function getSubTree($data , $id = 0 , $lev = 0) { 
        static $son = array(); 
        foreach($data as $key => $value) { 
            if($value['pid'] == $id){ 
                  $value['lev'] = $lev; 
                  $value['str'] =str_repeat('---', $lev);
                  $son[] = $value;
                  unset($data[$key]);
                  $this->getSubTree($data , $value['id'], $lev+1);
                  } 
            } 
            return $son; 
        } 
    public function user_role_node(){
           $uid=cookie("u_id");
           $user=M("admin_user")->where(array("u_id"=>$uid))->field("number")->find();
           if($user['number']=="admin"){
                $arr=M("node")->field("id,pid,name,controller,action")->select();
                $arr=$this->getSubTree($arr , $id = 0 , $lev = 0);
           }else{
                $str=M("role_node")->join("kl_role_user_derive as d ON kl_role_node.r_id=d.r_id")->where(array("u_id"=>$uid))->field("n_id")->find();
                $arr=M("node")->where(array("id"=>array("in",$str['n_id'])))->field("id,pid,name,controller,action")->select();
                // print_r($arr);die;
                $arr=$this->getSubTree($arr , $id = 0 , $lev = 0);
           }
           return $arr;
    }
    //     function Tree($data , $id = 0) { 
    //     $task = array($id); 
    //     # 栈 任务表
    //     $son = array(); 
    //     while(!empty($task)) { 
    //     $flag = false; 
    //     # 是否找到节点标志 
    //     foreach($data as $k => $v) { 
    //     # 判断是否是子孙节点的条件 与 递归方式一致 
    //      if($v['pid'] == $id) {
    //       $son[] = $v; 
    //     # 节点存入数组 
    //     array_push($task , $v['id']); 
    //     # 节点id入栈 
    //     $id = $v['id']; 
    //     # 判断条件切换 
    //     unset($data[$k]); 
    //     # 删除节点 
    //     $flag = true; # 找到节点标志 
    //     } 
    //     } 
    //     # flag == false说明已经到了叶子节点 无子孙节点了 
    //     if($flag == false) { 
    //     array_pop($task); 
    //     # 出栈 
    //     $id = end($task); 
    //     # 寻找栈顶id的子节点
    //      } } return $son; }           
}