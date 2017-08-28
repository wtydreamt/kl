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
       	<div class="hs_com">
  		 <div class="container kl_sbcontern">
  		 	<div class="col-lg-8 sbcontern_l">
  		 			<h3><?php echo ($content["title"]); ?></h3>
  		 	<div class="uu_sp">
  		 		<div class="fl">
  		 			<span class="kl_scj" >
  		 			<img src="/gitkunl/kl/kuluncom/<?php echo ($content["head_img"]); ?>" alt=""  style="width: 30px;">
  		 				<?php echo ($content["nickname"]); ?>
  		 			</span>
  		 			<span class="ls_date" >
  		 				<?php echo ($content["ftime"]); ?>
  		 			</span>
  		 		</div> 
  		 		<div class="fr sb_fxx">
  		 			<span class="liulan">
  		 				<img src="/gitkunl/kl/kuluncom/Public/index/images/listicon.png"/>  73
  		 			</span>
  		 				<span class="zan">
  		 				<img src="/gitkunl/kl/kuluncom/Public/index/images/zanicon.jpg" alt="" />&nbsp; 73
  		 			</span>
  		 			<span class="fx">
  		 				<img src="/gitkunl/kl/kuluncom/Public/index/images/share.png" alt="" />&nbsp;分享
  		 			</span>
  		 		</div>
  		 	</div>
  		 	<hr />
  		 	<div class="sb_content">
  		 		<?php echo ($content["content"]); ?>
  		 	</div>
  		 	<p class="c_te">【风险提示：以上内容仅代表个人观点，不构成投资建议，股市有风险，投资需谨慎!】</p>
  		 </div>
  		 	<div class="col-lg-3 sbcontern_r fr">
  		 		<div class="m_right_box" data-reactid=".2.0.1.0">
	<div class="right_part03 clx paddBotno" data-reactid=".2.0.1.0.0">
		<div class="option_person_pic fl" data-reactid=".2.0.1.0.0.0">
			<img src="/gitkunl/kl/kuluncom/<?php echo ($lecture["head_img"]); ?>" width="100" height="100" data-reactid=".2.0.1.0.0.0.0">
		</div>
		<div class="option_person_con fl" data-reactid=".2.0.1.0.0.1">
			<em class="nikename" data-reactid=".2.0.1.0.0.1.0"><a href="/newhome//adviser/index?advisor_id=51" data-reactid=".2.0.1.0.0.1.0.0"><?php echo ($lecture["nickname"]); ?></a></em><i class="icon-v" data-reactid=".2.0.1.0.0.1.1"></i><span data-reactid=".2.0.1.0.0.1.2">钻石投顾</span>
			<div class="person_btn" data-reactid=".2.0.1.0.0.1.3">
				<div id="popQa" style="display:none;" data-reactid=".2.0.1.0.0.1.3.0">
					<div data-reactid=".2.0.1.0.0.1.3.0.0">
						<div class="question_pop" data-reactid=".2.0.1.0.0.1.3.0.0.0">
							<h1 data-reactid=".2.0.1.0.0.1.3.0.0.0.0">向史月波高控盘顾问提问</h1>
							<input type="text" placeholder="请输入股票代码或名称" class="search_inpt" data-reactid=".2.0.1.0.0.1.3.0.0.0.1">
							<div class="question_text" id="qa-51" data-reactid=".2.0.1.0.0.1.3.0.0.0.2">
								<textarea placeholder="请描述您的问题" data-reactid=".2.0.1.0.0.1.3.0.0.0.2.0"></textarea>
								<p class="introduction_num" data-reactid=".2.0.1.0.0.1.3.0.0.0.2.1">
									<span data-reactid=".2.0.1.0.0.1.3.0.0.0.2.1.0">还可输入</span><span class="introduction_num_cur" data-reactid=".2.0.1.0.0.1.3.0.0.0.2.1.1">0</span><span data-reactid=".2.0.1.0.0.1.3.0.0.0.2.1.2">字</span>
								</p>
							</div>
						</div>
						<div class="question_search" data-reactid=".2.0.1.0.0.1.3.0.0.1">
							<h2 data-reactid=".2.0.1.0.0.1.3.0.0.1.0">搜索结果</h2>
							<ul class="number" data-reactid=".2.0.1.0.0.1.3.0.0.1.1">
								<div data-reactid=".2.0.1.0.0.1.3.0.0.1.1.0">
								</div>
							</ul>
						</div>
					</div>
				</div>
				<a class="questions" href="javascript:;" data-reactid=".2.0.1.0.0.1.3.1">向TA提问</a><a href="javascript:;" class="fllow" data-reactid=".2.0.1.0.0.1.3.2">+关注</a>
			</div>
		</div>
		<p class="advisor_autograph" data-reactid=".2.0.1.0.0.2">
			<span data-reactid=".2.0.1.0.0.2.0">顾问签名：</span><span data-reactid=".2.0.1.0.0.2.1"><?php echo ($lecture["autograph"]); ?></span>
		</p>
	</div>
	<div class="right_part01" data-reactid=".2.0.1.0.1">
		<div class="tit02" data-reactid=".2.0.1.0.1.0">
			<img src="/gitkunl/kl/kuluncom/Public/index/images/tit02.png" data-reactid=".2.0.1.0.1.0.0"><span data-reactid=".2.0.1.0.1.0.1">顾问简介</span>
		</div>
		<div class="person_intro " data-reactid=".2.0.1.0.1.1">
			<p data-reactid=".2.0.1.0.1.1.0">
				<?php echo ($lecture["describe"]); ?>
			</p>
		</div>
	</div>
	<div class="right_part02" data-reactid=".2.0.1.0.2">
		<div class="tit02" data-reactid=".2.0.1.0.2.0">
			<img src="/gitkunl/kl/kuluncom/Public/index/images/titic03.png" data-reactid=".2.0.1.0.2.0.0"><span data-reactid=".2.0.1.0.2.0.1">顾问信息</span>
		</div>
		<div class="person_intro infomation" data-reactid=".2.0.1.0.2.1">
			<p data-reactid=".2.0.1.0.2.1.0">
				<span data-reactid=".2.0.1.0.2.1.0.0">所属机构：</span><span data-reactid=".2.0.1.0.2.1.0.1"><?php echo ($lecture["mechanism"]); ?></span>
			</p>
			<p data-reactid=".2.0.1.0.2.1.1">
				<span data-reactid=".2.0.1.0.2.1.1.0">从业资格：</span><span data-reactid=".2.0.1.0.2.1.1.1"><?php echo ($lecture["card"]); ?></span>
			</p>
			<p data-reactid=".2.0.1.0.2.1.2">
				<span data-reactid=".2.0.1.0.2.1.2.0">从业年限：</span><span data-reactid=".2.0.1.0.2.1.2.1"><?php echo ($lecture["Industry_time"]); ?>年以上</span>
			</p>
		</div>
	</div>
	<div class="right_part03" data-reactid=".2.0.1.0.3">
		<div class="tit02" data-reactid=".2.0.1.0.3.0">
			<img src="/gitkunl/kl/kuluncom/Public/index/images/titic02.png" data-reactid=".2.0.1.0.3.0.0"><span data-reactid=".2.0.1.0.3.0.1">擅长领域</span>
		</div>
		<div class="person_intro link clx" id="expertList" data-reactid=".2.0.1.0.3.1">
			<div class="expertList clx" data-reactid=".2.0.1.0.3.1.0">
      <?php if(is_array($labe)): foreach($labe as $key=>$l): ?><span href="javascript:;"><?php echo ($l["name"]); ?></span><?php endforeach; endif; ?>
			</div>
		</div>
	</div>
</div>
  		 	</div>
  		 </div>
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