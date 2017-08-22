<?php
namespace Web\Controller;
use Think\Controller;
class ReviewController extends Controller {
    public function index(){
    $review=D("Common")->generalquery("review",true,true,"all");
    $this->assign("review",$review['message']);    	
	$this->display('index');
    }
}