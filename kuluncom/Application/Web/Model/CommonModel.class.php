<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/3/29
 * Time: 9:47
 */
namespace Home\Model;
use Think\Model;
class CommonModel extends  Model
{
    /*
     *  多条查询
     *  $name 表名
     *  $field 查询字段
     *  $where1 查询条件
     *  $order 排序(默认为asc)
     *  $limit 查询条数
     */
    public function manySelect($name,$field,$where1,$order,$limit){
        $Model = M($name); // 实例化User对象
        $where=empty($where1)?'is_show=1':$where1;
        $result=$Model->where($where)->field($field)->order($order)->limit($limit)->select();
        return $result;
    }

    /*
     *  select 两表联查
     *  $user 主表名
     *  $sql 关联sql
     *  $where 查询条件
     *  $order 排序(默认为asc)
     *  $limit 查询条数
     */
    public function jionSelect($user,$sql,$where,$field,$order,$limit){
        $Model = M("$user");
        $result=$Model->join($sql)
            ->where($where)
            ->field($field)
            ->order($order)
            ->limit($limit)
            ->select();
//        echo $Model->_sql();die;
        return $result;
    }


    /*
     *  文件上传
     *  $names 添加新的文件夹
     *  $filename 上传的字段
     */
    public function fileUpload($names,$filename){

        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize = 3145728;// 设置附件上传大小 3M
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->rootPath = './';
        $upload->savePath = '/Public/'.$names.'/'; // 设置附件上传目录    // 上传文件
        $info = $upload->uploadOne($_FILES[$filename]);
        if (!$info) {// 上传错误提示错误信息
            $error=$upload->getError();
            return $data=array("msg"=>"0","error"=>$error);
        } else {
            $path ='Uploads'.$info['savepath'].$info['savename'];
            return $data=array("msg"=>"1","success"=>$path);
        }
    }

    /*
     *  分页
     *  $tableName 表名
     *  $where     查询条件
     *  $$pagesize 每页条数
     *  $id 排序条件 $sort asc|desc
     */
    public function Pages($tableName,$where,$pagesize,$id,$sort="desc"){
        $m=M($tableName);
        // $order=array($id=>$id,$sort=>$sort);
        $p=$this->getpage($m,$where,$pagesize);
        $list=$m->field(true)->where($where)->order("'$id $sort'")->select();
        // return $m->getLastSql();
        $page=$p->show();
        return $res=array("list"=>$list,"page"=>$page);

    }
        /*
    *定制分页样式
     */
        function getpage(&$m,$where,$pagesize=10){
        $m1=clone $m;//浅复制一个模型
        $count = $m->where($where)->count();//连惯操作后会对join等操作进行重置
        $m=$m1;//为保持在为定的连惯操作，浅复制一个模型
        $p=new \Think\Page($count,$pagesize);
        $p->lastSuffix=false;
        $p->setConfig('header','<button type="button" class="btn btn btn-default">共<b>%TOTAL_ROW%</b>条记录&nbsp;&nbsp;每页<b>'.$pagesize.'</b>条&nbsp;&nbsp;第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</button>');
        $p->setConfig('prev','<button type="button" class="btn btn btn-default">上一页</button>');
        $p->setConfig('next','<button type="button" class="btn btn btn-default">下一页</button>');
        $p->setConfig('last','<button type="button" class="btn btn btn-default">末页</button>');
        $p->setConfig('first','<button type="button" class="btn btn btn-default">首页</button>');
        $p->setConfig('theme','%FIRST% %UP_PAGE% %LINK_PAGE% %DOWN_PAGE% %END% %HEADER%');

        $p->parameter=I('get.');

        $m->limit($p->firstRow,$p->listRows);

        return $p;
    }

    /*
     *  添加/修改
     *  $user 表名
     *  $id 区分添加/修改
     *  $path 文件上传路径
     *  $data 数据
     */
    public function addSave($user,$id,$where,$data){
        $con = M($user);
        if($id==''){
            //入库
            $res = $con->add($data);
            $arr=array('status'=>1,'data'=>$res);
            return $arr;
        }else{
            //修改
            $result=$con->where($where)->save($data);
            if($result===false){
                $arr=array('status'=>2,'data'=>"修改失败"); 
            }
            else{
                $arr=array('status'=>3,'data'=>"修改成功");
            }
            
            return $arr;
        }
    }



        public function del($tableName,$where){
            return $res=M($tableName)->where($where)->delete();
        }
    /*
     * 两表联查 分页
     */
    public function jionPages($tableName,$where,$pagesize,$id,$sort="desc",$sql,$field=true){
        $m=M($tableName);
        // $order=array($id=>$id,$sort=>$sort);
        $p=$this->getpage($m,$where,$pagesize);
        $list=$m->join($sql)->field($field)->where($where)->order("'$id $sort'")->select();
        //echo $m->_sql();die;
         //return $m->getLastSql();
        $page=$p->show();
        return $res=array("list"=>$list,"page"=>$page);
    }  
     /*
     * 两表联查 Find
     * (@参数同上)
     */
    public function jionFind($tableName,$sql,$field=true,$where,$id,$sort="desc"){
        $User=M($tableName);
        $result=$User->join($sql)->field($field)->where($where)->order("'$id $sort'")->find();
        //echo $User->_sql();die;
        return $result;
    }

    public function adddata($tableName,$data){
        $table=M($tableName);
        $res=$table->add($data);
        $message=array();
        if(!$res){
            return $message=array("message"=>"网络繁忙稍后再试","status"=>"false");
        }else{
            return $message=array("message"=>$res,"status"=>"true");
        }
    } 

    public function generalquery($tableName,$where,$field=true,$type="all"){
           $res=$type=="all"?$res=M($tableName)->where($where)->field($field)->select():$res=M($tableName)->where($where)->field($field)->find();
           if($res){
             return $message=array("message"=>$res,"status"=>"true");
           }else{
             return $message=array("message"=>"","status"=>"false");
           }
    }        
}

