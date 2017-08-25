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
    <link href="/gitkunl/kl/kuluncom/Public/index/css/video-js.css" rel="stylesheet">
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
                               <li ><a href="<?php echo U('Activity/index');?>">大赛活动</a></li>
                                <li ><a href="<?php echo U('Strategy/index');?>">VIP投资策略</a></li>
                                <!-- <li ><a href="jsJp.html">金牌讲师</a></li>-->
                        </ul>
                      
                    </div>
                    <!-- END .navbar-collapse -->
                </div>
            </nav>
        </div>

    </div>
       	<div class="px_com container">
  			<div class="hc_top">
  				<h2 class="inner_10_rl">功力高级课月课</h2>
  			</div>
  			<div class="col-md-8 ywd_bt">
  				<div class="col-md-5 ywd_img">
  					<img src="/gitkunl/kl/kuluncom/<?php echo ($res["img"]); ?>" alt="" class="img-thumbnail">	
  			   </div>
  			   <div class="col-md-7 ywd_tab">
  					<ul class="ywd_ul">
  						<li>
  							<h3><?php echo ($res["name"]); ?></h3>
  						</li>
  						<li>
  							<p>产品或服务风险等级为：<?php echo ($res["fxrade"]); ?></p>
  						</li>
  						<li>
  							<p>
  							<span>
  								导师 : 
  							</span>
  							          <?php echo ($user["nickname"]); ?>
  							</p>
  						</li>
  						<li>
  							<p>
  							<span>
  								课时 : 
  							</span>
  							         <?php echo ($res["ketime"]); ?>课时
  							</p>
  						</li>
  						<li>
  							<p>
  							<span>
  								价格  : 
  							</span>
  							    <strong class="f_s18 f_col_Red" id="_classPrice">￥<?php echo ($res["price"]); ?><br></strong>
  							</p>
  						</li>
  						<li>
  							<div class="list_bor">
  								<dl class="col-md-4">
  									<dt>累计销售</dt>
  									<dd>0</dd>
  								</dl>
  								<dl class="col-md-4 ls_b">
  									<dt>学员评论</dt>
  									<dd>0</dd>
  								</dl>
  								
  							</div>
  						</li>
  						<li>
  							<p class="mb_10">
  								<label class="mb_40">开班  :</label>
								<a href="javascript:;" class="sloc_lesson_selected"><?php echo ($res["starttime"]); ?></a>
                            </p>
  						</li>
  						<li>
  							<div class="sloc_lesson_section mb_20">
                                <span class="float_right l_h41 f_col_Gray">热线电话：010-6292-9270</span>
                                  <div class="clear">
                               <button type="button" class="btn btn-danger">立即购买</button>
                            </div>
  						</li>
  					</ul>
  			   </div>
  			</div>
  			<div class="col-md-4">
  				<h3 class="pj_h3bt">课程评价</h3>
  				<div class="sloc_give_mark">
                    <p><span>课程评分：</span><span style="padding:8px 8px 0 0;"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"></span><span>10.0</span></p>
					<p><span>导师评分：</span><span style="padding:8px 8px 0 0;"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"></span><span>10.0</span></p>
					<p><span>服务评分：</span><span style="padding:8px 8px 0 0;"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"><img src="http://static.yxcps.cn/images/rating/small-star-on.png" title="非常满意"></span><span>10.0</span></p>
                  </div>
                <div class="kl_sloc_order tab ">
                  <div class="kl_slo_bt">
                  	<h6> 同类课程</h6>
                  </div>                  
                <div class="item current">
                   <ul class="sloc_order_klassul">
                   <?php if(is_array($lists)): foreach($lists as $key=>$l): ?><li class="">
	                        <div class="sloc_order_l fl ">
	                        	<a target="_blank" href="" ><img alt="" src="/gitkunl/kl/kuluncom/<?php echo ($l["img"]); ?>"></a>
	                        </div>
	                         <div class="sloc_order_r fl">
	                        	<a target="_blank" href="<?php echo U('Curriculum/info');?>?id=<?php echo ($l["id"]); ?>" ><?php echo ($l["name"]); ?></a>
	                        </div>
	                    </li><?php endforeach; endif; ?>
	              </ul>
                </div>                                                              
                                      
                                      
  			</div>
  			</div>
  			
  			<div class="col-lg-12 kl_tab_con">
  				<ul class="kl_tabnaber">
  					<li class="active">课程介绍</li>
  					<li>课程目录</li>
  					<li>学员评价</li>
  					<li>购买记录</li>
  				</ul>
  				<div class="kl_kctabcom">
            <div class="kl_lsgo" style="display: block;">
              
                <video id="my-video" class="video-js" controls preload="auto" style="width: 100%;margin-bottom: 10px;" height="400" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                <source src="<?php echo ($res["link"]); ?>" type="video/mp4">
                <p class="vjs-no-js">
                要查看此视频，请更新最新浏览器观看
                  <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
               </video>
               <?php echo ($res["desc"]); ?>
            </div>
  					<div class="kl_lsgo">
  					<div class="task-chapter">
							<div class="task-part-list">
								<div class="task-part-item">
								<?php if(is_array($menu)): foreach($menu as $key=>$m): ?><div class="task-task-list">
										<a class="task-task-item task-item-jump js-expr-video-link js-task-without-login js-expr-item" href=""  data-position="0" data-toggle="modal" data-target="#myModal"><i class="icon-play item-icon"></i>
										<p class="task-tt">
											<span class="task-tt-text" title="【模拟盘点评-当下行情下的操作策略"><?php echo ($m["title"]); ?></span><span class="tt-suffix">(<?php echo ($m["shi"]); ?>)</span>
										</p>
										</a><!-- end for --><?php endforeach; endif; ?>
									</div>
								</div>
						</div>
  					</div>
  					</div>
  					<div class="kl_lsgo">
  						<ul class="kl_comments_ul">
<!--   							 <li>
								<div class="user_comments_li">
							 	<div class="user_comments_li_lt float_left "><div class="user_comments_photo"><a href="#"><img  src="/gitkunl/kl/kuluncom/Public/index/images/head_sculpture.png"></a></div></div>
								<div class="user_comments_li_rt float_left">
								  	<div class="user_comments_id">
								  		<span><a href="javascript:void(0);"><strong class="f_s16">
								  		176****7841
								  		</strong></a></span>
							       		<span><img src="images/small-star-on.png" title="非常满意"><img src="images/small-star-on.png" title="非常满意"><img src="images/small-star-on.png" title="非常满意"><img src="images/small-star-on.png" title="非常满意"><img src="images/small-star-on.png" title="非常满意"></span>
								  	</div>
								  	<div class="user_comments_date"><span><a class="other" href="javascript:;">高级培训课季课</a></span><span class="inner_20_l">2017-07-12 16:38:17</span></div>
								  	<div class="user_comments_type ">
								   	<p>近期指数有点怕怕的，但是看了师的收评，心里还是比较有底，吴老师最近特别分析雄安概念股，今日出现了异动，真准，信服吴老师！</p>
								  	</div>
								</div>
							  </div>
							
						  </li>
						  <hr /> -->
						  
  						</ul>
  					
  					</div>
  					<div class="kl_lsgo">
  						<div class="gm-jl">
  							<!-- <table class="table_style_ae mb_20">
								<thead>
									<tr>
										<th>学员</th>
										<th>用户名</th>
										<th>课程</th>
										<th>价格</th>
										<th>成交时间</th>
									</tr>
								</thead>
								<tbody>
									
									
											<tr>
												<td>
													<div class="table_ae_photo float_left">
														<a href="javascript:void(0);"> 
														<img onerror="showImgDelay(this,'http://static.yxcps.cn/images/head_sculpture.png');" src="http://sf.yxcps.cn///portrait/default_head_photo.png">
														</a>
													</div>
												</td>
												<td>133****5875</td>
												<td>￥￥￥高级培训课季课(2016年12月)</td>
							
												<td>2016-12-08 18:13:38</td>
											</tr>
								</tbody>
							</table> -->
  						</div>
  					</div>
  					
  				</div>
  			</div>
  	</div>
  	<div class="modal fade" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">关闭</span></button>
	        <h4 class="modal-title">对不起！请购买后观看视频！</h4>
	      </div>
	      <div class="modal-body">
	        <p>是否购买课程？</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">不购买</button>
	        <button type="button" class="btn btn-primary">购买</button>
	      </div>
	    </div>
	  </div>
</div>

    <script src="/gitkunl/kl/kuluncom/Public/index/js/jquery-1.11.0.min.js"></script>
    <script src="/gitkunl/kl/kuluncom/Public/index/js/zui.min.js"></script>
    <script src="/gitkunl/kl/kuluncom/Public/index/js/video.min.js"></script>  
    <script>  
      $('.kl_tabnaber li').click(function() {
            var i = $(this).index();
            $(this).addClass('active').siblings().removeClass('active');
            $('.kl_kctabcom .kl_lsgo').eq(i).show().siblings().hide();
       });
       
      var myPlayer = videojs('my-video');
      videojs("my-video").ready(function(){
        var myPlayer = this;
        myPlayer.play();
      });
    </script>    
    <script>  
      $('.kl_tabnaber li').click(function() {
            var i = $(this).index();
            $(this).addClass('active').siblings().removeClass('active');
            $('.kl_kctabcom .kl_lsgo').eq(i).show().siblings().hide();
        });
    </script>

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