<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <title>昆仑财富</title>
    <meta name="keywords" content="昆仑财富
" />
    <meta name="description" content="昆仑财富
" />
    <link rel="shortcut icon" href="/gitkunl/kl/kuluncom/Public/index/images/ybtx_favicon.ico" />
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge，chrome=1">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0;" name="viewport" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- zui -->
    <link href="/gitkunl/kl/kuluncom/Public/index/css/zui.css" rel="stylesheet">
    <link rel="stylesheet" href="/gitkunl/kl/kuluncom/Public/index/css/kui.css">
</head>

<body>
    <!--[if lt IE 9]>
    <div class="alert alert-danger">您正在 使用 <strong>过时的</strong> 浏览器. 是时候 <a href="http://browsehappy.com/">更换一个更好的浏览器</a> 来提升用户体验.</div>
  <![endif]-->
    <!--
    未登录-->
    <div class="klBannerConTwo">
        <div class="container">
            <nav class="navbar" role="navigation">
                <div class="container-fluid">
                    <!-- 导航头部 -->
                    <div class="navbar-header">
                        <!-- 移动设备上的导航切换按钮 -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse-example">
                            <span class="sr-only">切换导航</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- 品牌名称或logo -->
                        <a class="navbar-brand " href="your/nice/url">
                            <img src="/gitkunl/kl/kuluncom/Public/index/images/logo.png" alt="" class="kllogo">
                        </a>
                    </div>
                    <!-- 导航项目 -->
                    <div class="collapse navbar-collapse navbar-collapse-example csx-xx" style="margin-left: 200px;">
                        <!-- 一般导航项目 -->
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?php echo U('Index/index');?>">首页</a></li>
                            <li ><a href="<?php echo U('Lecturer/index');?>">金牌讲师</a></li>
                             <li ><a href="<?php echo U('Review/index');?>">实战辅导</a></li>
                              <li ><a href="<?php echo U('Curriculum/index');?>">课程培训</a></li>
                               <li ><a href="大赛活动.html">大赛活动</a></li>
                                <li ><a href="<?php echo U('Strategy/index');?>">VIP投资策略</a></li>
                                <!-- <li ><a href="jsJp.html">金牌讲师</a></li>-->
                        </ul>
                      
                    </div>
                    <!-- END .navbar-collapse -->
                </div>
            </nav>
        </div>

    </div>
     
  
    <div class="container klcontainer">
   		<div class="kl_naber_no">
   			<ul>
   				<li><a href="" class="active">最新</a></li>
   				<li><a href="">大盘分析</a></li>
   				<li><a href="">热门题材</a></li>
   				<li><a href="">个股精讲</a></li>
   				<li><a href="">知识技巧</a></li>
   				<li><a href="">个人心得</a></li>
   			</ul>
   		</div>
          <ul class="zb-list-ul sb_list">
          <?php if(is_array($content)): foreach($content as $key=>$con): ?><li>
          	<div class="zt_com">
          		<a href="<?php echo U('Index/info');?>?id=<?php echo ($con["id"]); ?>">
          			<h3><?php echo ($con["title"]); ?></h3>
          			<p><?php echo ($con["content"]); ?></p>
          		</a>
          	</div>
          	<div class="zt_sb">
          		<div class="fl sb_date_l">
          		<a href="/">
          			<img src="/gitkunl/kl/kuluncom/<?php echo ($con["head_img"]); ?>" alt="" style="width: 30px;">
          			<?php echo ($con["nickname"]); ?>
          		</a>
          		
          		</div>
          		<div class="fr sb_date_r">
          			<span>
          				<?php echo ($con["ftime"]); ?>
          			</span>
          			<span>
          				<?php echo ($con["read"]); ?> 阅读
          			</span>
          		</div>
          	</div>
          </li><?php endforeach; endif; ?>
        </ul>
        <p class="klts text-center">
            <img src="images/bx.png" alt=""> 想看更多的请点击我们的公众号！
        </p>
    </div>
  
    <footer>
        <div class="bg-grayq">
            <div class="container pb-36">
                <div class="col-lg-4">
                    <ul class="nore-ul text-center">
                        <li>
                            <h2 class="text-wthir pb-2">合作伙伴</h2>
                        </li>
                        <li><a href="" class="text-wthir with-padding">凤凰财经</a></li>
                        <li><a href="" class="text-wthir with-padding">凤凰财经</a></li>
                        <li><a href="" class="text-wthir with-padding">凤凰财经</a></li>
                        <li><a href="" class="text-wthir with-padding">凤凰财经</a></li>
                        <li><a href="" class="text-wthir with-padding">凤凰财经</a></li>
                        <li><a href="" class="text-wthir with-padding">凤凰财经</a></li>


                    </ul>
                </div>
                <div class="col-lg-4">
                    <h2 class="text-wthir pb-2 text-center ">在线留言</h2>
                    <form class="form-horizontal" style="margin: 0 auto;">
                        <div class="form-group">
                            <label for="exampleInputName" class="col-sm-3 required text-wthir">姓名</label>
                            <div class="col-md-6 col-sm-9">
                                <input type="text" class="form-control" id="exampleInputName" placeholder="用户名" name="u_name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputphone" class="col-sm-3 required text-wthir">电话</label>
                            <div class="col-md-6 col-sm-9">
                                <input type="text" class="form-control" id="exampleInputphone" placeholder="电话" name="u_phone">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="liuyanInputphone" class="col-sm-3 required text-wthir">请留言</label>
                            <div class="col-md-6 col-sm-9">
                                <textarea class="form-control" rows="3" id="liuyanInputphone" placeholder="请输入留言内容" name="u_liuyan"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <i class="col-sm-3"> </i>
                            <div class="col-sm-9">
                                <button type="button" class="btn btn-default ffImtj ">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <h2 class="text-wthir pb-2 text-center">关注我们</h2>
                    <img class="ewm center-block  with-padding" src="/gitkunl/kl/kuluncom/Public/index/images/ewm.jpg" alt="昆仑财富-公众号">
                </div>
            </div>
        </div>
        <div class="bg-grays">
            <div class="container">
                <p class="row"></p>
                <p class="text-muted text-wthir p-s text-center">© 2017 北京微智高科信息技术有限公司 版权所有 京ICP备15063444号-2 <a href="tel://010-6292-9270" class="pull-right" style="color:#fff;">010-6292-9270</a></p>
            </div>
        </div>

    </footer>
<!--  关注公众号-->
<div class="sb_gzh">
	<h5>扫一扫关注公众号</h5>
	<img src="/gitkunl/kl/kuluncom/Public/index/images/ewm.jpg"/>
</div>
    <script src="/gitkunl/kl/kuluncom/Public/index/js/jquery-1.11.0.min.js"></script>
    <script src="/gitkunl/kl/kuluncom/Public/index/js/zui.min.js"></script>
    <script>
        $(document).ready(function() {
        	
            $('.carousel-inner').find('.item:first').addClass("active");
            $(".hzyy-con div:nth-child(3n)").after("<i class='clearfix'></i>");
            $('.carousel-indicators').find('li:first').addClass("active");

        });
    </script>
</body>

</html>