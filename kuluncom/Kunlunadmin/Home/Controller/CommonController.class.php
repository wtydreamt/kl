<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
                 parent::__construct();
                $nodelist=$this->nodelist();
                C("MENU",$nodelist);
    }
    public function nodelist(){
        $arr=M("node")->field("id,pid,name,controller,action")->select();
        $arr=$this->getSubTree($arr , $id = 0 , $lev = 0);
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
                  $son[] = $value;
                 $this->getSubTree($data , $value['id'] , $lev+1); } 
            } 
            return $son; 
        }    
}