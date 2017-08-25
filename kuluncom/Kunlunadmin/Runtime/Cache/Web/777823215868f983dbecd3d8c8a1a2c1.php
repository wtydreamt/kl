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
         <div class="container klcontainer">
   		<div class="ssgz">
		    <ul id="tab_ss" class="clearfix">
		    	<li class="active">赛事介绍</li>
		        <li class="">奖项设置</li>
		        <li class="">比赛排名</li>
		    </ul>
	    </div>
	    <div class="kl_lia_con">
	    	<div class="lia0n1" style="display: block;">
              <div class="box1502">
  <?php echo ($content["content"]); ?></div>
          </div>
          <div class="lia0n1">
             <img src="/gitkunl/kl/kuluncom/<?php echo ($content["activity_img"]); ?>">
          </div>
          
          <div class="lia0n1">
             <div class="w950 box18_bg">
			    <div id="tabControlArea" class="box18 pore">
				<ul class="clearfix list0a" id="tab17">
				    <li class="m04 current"><a>模拟排名</a></li>
				    <li class=""><a>实盘排名</a></li>
				    <li class=""><a>团队排名</a></li>
				</ul>
				<div class="box1801 ls">
				    <div id="dc5" style="display: block;">
					<div class="time02"><span id="js_syb_date">2017年08月16日收益榜</span></div>
					<div class="box1802 clearfix">
					    <div class="box1802L">
						<ul id="tab18">
						    <!--<li class="js_syb_type" data="61" name="type">精英赛</li>
						    <li class="js_syb_type" data="7" name="type">挑战赛</li>
						    <li class="js_syb_type" data="1" name="type">总收益</li>-->
						    <li class="js_syb_type current" data="2" name="type">月收益</li>
						    <li class="js_syb_type" data="3" name="type">周收益</li>
						    <li class="js_syb_type" data="4" name="type">日收益</li>
						</ul>
					    </div>
					    <div class="box1802R gs">
						
						<table class="tab06">
			
			        <tbody><tr>
			        <th width="68" class="xm01">排名</th>
			        <th width="130" class="xm02">选手</th>
			        <th width="80">月收益</th>
			        <th width="80">总收益</th>
			        <th width="80">周收益</th>
			        <th width="80">日收益</th>
			        <th width="80">昨日排名</th>
			        <th width="80"><span>总资产</span></th>
				<th></th>
			    </tr>
			        <tr class="bg02">
				    <td>1<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_11.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/50730012" title="常道港" target="_blank">常道港</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50730012" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">19.27%</font></span></td>
			        <td><span class="hs01"><font color="green">-2.89%</font></span></td>
			        <td><span class="hs01"><font color="red">7.74%</font></span></td>
			        <td><span class="hs01"><font color="red">2.79%</font></span></td>
			        <td><span><font>1</font></span></td>
			        <td>194217.11</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="50730012" title="常道港" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>2<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/86862869" title="天和地一" target="_blank">天和地一</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="86862869" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">16.20%</font></span></td>
			        <td><span class="hs01"><font color="red">16.20%</font></span></td>
			        <td><span class="hs01"><font color="red">7.07%</font></span></td>
			        <td><span class="hs01"><font color="red">1.39%</font></span></td>
			        <td><span><font>5</font></span></td>
			        <td>232393.77</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="86862869" title="天和地一" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>3<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/72635870" title="涨停王来了" target="_blank">涨停王来了</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="72635870" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">16.15%</font></span></td>
			        <td><span class="hs01"><font color="green">-4.27%</font></span></td>
			        <td><span class="hs01"><font color="red">5.60%</font></span></td>
			        <td><span class="hs01"><font color="red">4.63%</font></span></td>
			        <td><span><font>20</font></span></td>
			        <td>191453.14</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="72635870" title="涨停王来了" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>4<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/10948097" title="七彩阳光88" target="_blank">七彩阳光88</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="10948097" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">15.54%</font></span></td>
			        <td><span class="hs01"><font color="green">-42.79%</font></span></td>
			        <td><span class="hs01"><font color="red">5.01%</font></span></td>
			        <td><span class="hs01"><font color="red">4.52%</font></span></td>
			        <td><span><font>24</font></span></td>
			        <td>114421.31</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="10948097" title="七彩阳光88" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>5<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/70973252" title="烟波江上人愁" target="_blank">烟波江上人愁</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="70973252" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">15.18%</font></span></td>
			        <td><span class="hs01"><font color="green">-60.61%</font></span></td>
			        <td><span class="hs01"><font color="red">18.39%</font></span></td>
			        <td><span class="hs01"><font color="red">6.84%</font></span></td>
			        <td><span><font>78</font></span></td>
			        <td>78779.41</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="70973252" title="烟波江上人愁" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>6<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_12.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/53761654" title="何大胜" target="_blank">何大胜</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="53761654" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">14.89%</font></span></td>
			        <td><span class="hs01"><font color="green">-61.42%</font></span></td>
			        <td><span class="hs01"><font color="red">5.26%</font></span></td>
			        <td><span class="hs01"><font color="green">-0.68%</font></span></td>
			        <td><span><font>2</font></span></td>
			        <td>77169.82</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="53761654" title="何大胜" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>7<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/3573871" title="年轻的心2010" target="_blank">年轻的心2010</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="3573871" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">14.52%</font></span></td>
			        <td><span class="hs01"><font color="red">9.97%</font></span></td>
			        <td><span class="hs01"><font color="red">0.80%</font></span></td>
			        <td><span class="hs01"><font color="red">2.99%</font></span></td>
			        <td><span><font>17</font></span></td>
			        <td>219935.85</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="3573871" title="年轻的心2010" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>8<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_12.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/50168493" title="自信qwe" target="_blank">自信qwe</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50168493" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">14.39%</font></span></td>
			        <td><span class="hs01"><font color="green">-26.01%</font></span></td>
			        <td><span class="hs01"><font color="red">5.05%</font></span></td>
			        <td><span class="hs01"><font color="green">-0.62%</font></span></td>
			        <td><span><font>3</font></span></td>
			        <td>147982.76</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="50168493" title="自信qwe" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>9<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_12.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/68130101" title="种菜的土匪" target="_blank">种菜的土匪</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="68130101" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">14.08%</font></span></td>
			        <td><span class="hs01"><font color="red">8.17%</font></span></td>
			        <td><span class="hs01"><font color="red">3.17%</font></span></td>
			        <td><span class="hs01"><font color="red">0.00%</font></span></td>
			        <td><span><font>7</font></span></td>
			        <td>216349.48</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="68130101" title="种菜的土匪" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>10<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/44946003" title="星星的你2014" target="_blank">星星的你2014</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="44946003" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">13.54%</font></span></td>
			        <td><span class="hs01"><font color="green">-3.72%</font></span></td>
			        <td><span class="hs01"><font color="red">6.38%</font></span></td>
			        <td><span class="hs01"><font color="red">1.46%</font></span></td>
			        <td><span><font>15</font></span></td>
			        <td>192564.61</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="44946003" title="星星的你2014" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			    
			    </tbody></table></div>
						<!--周收益-->
						<div class="box1802R gs" style="display: none;">
						 
						<table class="tab06">
			
			        <tbody><tr>
			        <th width="68" class="xm01">排名</th>
			        <th width="130" class="xm02">选手</th>
			        <th width="80">周收益</th>
			        <th width="80">总收益</th>
			        <th width="80">月收益</th>
			        <th width="80">日收益</th>
			        <th width="80">昨日排名</th>
			        <th width="80"><span>总资产</span></th>
				<th></th>
			    </tr>
			        <tr class="bg02">
				    <td>1<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/70973252" title="烟波江上人愁" target="_blank">烟波江上人愁</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="70973252" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">18.39%</font></span></td>
			        <td><span class="hs01"><font color="green">-60.61%</font></span></td>
			        <td><span class="hs01"><font color="red">15.18%</font></span></td>
			        <td><span class="hs01"><font color="red">6.84%</font></span></td>
			        <td><span><font>5</font></span></td>
			        <td>78779.41</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="70973252" title="烟波江上人愁" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>2<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/50299593" title="user50299593" target="_blank">user50299593</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50299593" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">16.49%</font></span></td>
			        <td><span class="hs01"><font color="green">-74.87%</font></span></td>
			        <td><span class="hs01"><font color="red">2.46%</font></span></td>
			        <td><span class="hs01"><font color="red">7.30%</font></span></td>
			        <td><span><font>62</font></span></td>
			        <td>50252.54</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="50299593" title="user50299593" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>3<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/78831536" title="淡泊明志666" target="_blank">淡泊明志666</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="78831536" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">16.00%</font></span></td>
			        <td><span class="hs01"><font color="green">-44.35%</font></span></td>
			        <td><span class="hs01"><font color="red">2.59%</font></span></td>
			        <td><span class="hs01"><font color="red">4.43%</font></span></td>
			        <td><span><font>2</font></span></td>
			        <td>111290.72</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="78831536" title="淡泊明志666" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>4<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/70963023" title="发源股道" target="_blank">发源股道</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="70963023" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">14.62%</font></span></td>
			        <td><span class="hs01"><font color="green">-65.93%</font></span></td>
			        <td><span class="hs01"><font color="red">7.97%</font></span></td>
			        <td><span class="hs01"><font color="red">4.47%</font></span></td>
			        <td><span><font>21</font></span></td>
			        <td>68143.23</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="70963023" title="发源股道" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>5<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/82046938" title="痴傻癫狂Lew逍摇郎" target="_blank">痴傻癫狂L...</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="82046938" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">14.03%</font></span></td>
			        <td><span class="hs01"><font color="green">-19.58%</font></span></td>
			        <td><span class="hs01"><font color="red">3.50%</font></span></td>
			        <td><span class="hs01"><font color="red">3.42%</font></span></td>
			        <td><span><font>11</font></span></td>
			        <td>160838.04</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="82046938" title="痴傻癫狂Lew逍摇郎" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>6<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/80151907" title="婉约美丽" target="_blank">婉约美丽</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="80151907" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">13.95%</font></span></td>
			        <td><span class="hs01"><font color="green">-39.66%</font></span></td>
			        <td><span class="hs01"><font color="red">4.55%</font></span></td>
			        <td><span class="hs01"><font color="red">3.05%</font></span></td>
			        <td><span><font>7</font></span></td>
			        <td>120677.57</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="80151907" title="婉约美丽" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>7<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/55689731" title="一帆风顺1818" target="_blank">一帆风顺1818</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="55689731" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">13.26%</font></span></td>
			        <td><span class="hs01"><font color="green">-38.76%</font></span></td>
			        <td><span class="hs01"><font color="red">4.73%</font></span></td>
			        <td><span class="hs01"><font color="red">0.55%</font></span></td>
			        <td><span><font>1</font></span></td>
			        <td>122480.12</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="55689731" title="一帆风顺1818" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>8<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/42201945" title="瑶台玉凤" target="_blank">瑶台玉凤</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="42201945" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">12.87%</font></span></td>
			        <td><span class="hs01"><font color="red">3.92%</font></span></td>
			        <td><span class="hs01"><font color="red">3.92%</font></span></td>
			        <td><span class="hs01"><font color="red">3.38%</font></span></td>
			        <td><span><font>35</font></span></td>
			        <td>207836.06</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="42201945" title="瑶台玉凤" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>9<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/51625200" title="鹏英" target="_blank">鹏英</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="51625200" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">12.53%</font></span></td>
			        <td><span class="hs01"><font color="green">-62.21%</font></span></td>
			        <td><span class="hs01"><font color="green">-2.62%</font></span></td>
			        <td><span class="hs01"><font color="red">2.45%</font></span></td>
			        <td><span><font>17</font></span></td>
			        <td>75572.51</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="51625200" title="鹏英" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>10<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/82875186" title="亲爱的没毛病" target="_blank">亲爱的没毛病</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="82875186" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">12.36%</font></span></td>
			        <td><span class="hs01"><font color="green">-5.49%</font></span></td>
			        <td><span class="hs01"><font color="red">5.31%</font></span></td>
			        <td><span class="hs01"><font color="red">6.57%</font></span></td>
			        <td><span><font>333</font></span></td>
			        <td>189019.62</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="82875186" title="亲爱的没毛病" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			    
			    </tbody></table></div>
						<!--日收益-->
						<div class="box1802R gs" style="display: none;">
						
						<table class="tab06">
			
			        <tbody><tr>
			        <th width="68" class="xm01">排名</th>
			        <th width="130" class="xm02">选手</th>
			        <th width="80">日收益</th>
			        <th width="80">总收益</th>
			        <th width="80">月收益</th>
			        <th width="80">周收益</th>
			        <th width="80">昨日排名</th>
			        <th width="80"><span>总资产</span></th>
				<th></th>
			    </tr>
			        <tr class="bg02">
				    <td>1<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/50299593" title="user50299593" target="_blank">user50299593</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50299593" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">7.30%</font></span></td>
			        <td><span class="hs01"><font color="green">-74.87%</font></span></td>
			        <td><span class="hs01"><font color="red">2.46%</font></span></td>
			        <td><span class="hs01"><font color="red">16.49%</font></span></td>
			        <td><span><font>2</font></span></td>
			        <td>50252.54</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="50299593" title="user50299593" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>2<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/70973252" title="烟波江上人愁" target="_blank">烟波江上人愁</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="70973252" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">6.84%</font></span></td>
			        <td><span class="hs01"><font color="green">-60.61%</font></span></td>
			        <td><span class="hs01"><font color="red">15.18%</font></span></td>
			        <td><span class="hs01"><font color="red">18.39%</font></span></td>
			        <td><span><font>3</font></span></td>
			        <td>78779.41</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="70973252" title="烟波江上人愁" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>3<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/47415866" title="八宝GG88" target="_blank">八宝GG88</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="47415866" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">6.69%</font></span></td>
			        <td><span class="hs01"><font color="green">-31.18%</font></span></td>
			        <td><span class="hs01"><font color="red">4.51%</font></span></td>
			        <td><span class="hs01"><font color="red">9.29%</font></span></td>
			        <td><span><font>979</font></span></td>
			        <td>137635.71</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="47415866" title="八宝GG88" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>4<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/82875186" title="亲爱的没毛病" target="_blank">亲爱的没毛病</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="82875186" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">6.57%</font></span></td>
			        <td><span class="hs01"><font color="green">-5.49%</font></span></td>
			        <td><span class="hs01"><font color="red">5.31%</font></span></td>
			        <td><span class="hs01"><font color="red">12.36%</font></span></td>
			        <td><span><font>1146</font></span></td>
			        <td>189019.62</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="82875186" title="亲爱的没毛病" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>5<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/10877698" title="JHH765" target="_blank">JHH765</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="10877698" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">6.19%</font></span></td>
			        <td><span class="hs01"><font color="green">-10.90%</font></span></td>
			        <td><span class="hs01"><font color="red">2.67%</font></span></td>
			        <td><span class="hs01"><font color="red">4.59%</font></span></td>
			        <td><span><font>26503</font></span></td>
			        <td>178199.93</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="10877698" title="JHH765" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>6<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/41727184" title="ljw8786976" target="_blank">ljw8786976</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="41727184" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">6.07%</font></span></td>
			        <td><span class="hs01"><font color="green">-83.58%</font></span></td>
			        <td><span class="hs01"><font color="green">-1.06%</font></span></td>
			        <td><span class="hs01"><font color="red">9.37%</font></span></td>
			        <td><span><font>170</font></span></td>
			        <td>32837.50</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="41727184" title="ljw8786976" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>7<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/52361193" title="iris007" target="_blank">iris007</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="52361193" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">5.98%</font></span></td>
			        <td><span class="hs01"><font color="green">-0.02%</font></span></td>
			        <td><span class="hs01"><font color="red">2.98%</font></span></td>
			        <td><span class="hs01"><font color="red">10.55%</font></span></td>
			        <td><span><font>62</font></span></td>
			        <td>199957.60</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="52361193" title="iris007" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>8<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/50722033" title="7秒钟de记忆" target="_blank">7秒钟de记忆</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50722033" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">5.79%</font></span></td>
			        <td><span class="hs01"><font color="green">-52.76%</font></span></td>
			        <td><span class="hs01"><font color="green">-1.63%</font></span></td>
			        <td><span class="hs01"><font color="red">8.89%</font></span></td>
			        <td><span><font>26301</font></span></td>
			        <td>94477.49</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="50722033" title="7秒钟de记忆" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr class="bg02">
				    <td>9<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/73607378" title="涛涛369" target="_blank">涛涛369</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="73607378" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">5.60%</font></span></td>
			        <td><span class="hs01"><font color="green">-57.24%</font></span></td>
			        <td><span class="hs01"><font color="green">-8.14%</font></span></td>
			        <td><span class="hs01"><font color="red">5.02%</font></span></td>
			        <td><span><font>24983</font></span></td>
			        <td>85519.71</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="73607378" title="涛涛369" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			        <tr>
				    <td>10<span><img src="http://y2.ifengimg.com/a/2015/0531/bm_10.jpg" width="7" height="4"></span></td>
			        <td><a href="/gzs/45103269" title="奇迹男" target="_blank">奇迹男</a><img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="45103269" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;"></td>
			        <td><span class="hs01"><font color="red">5.59%</font></span></td>
			        <td><span class="hs01"><font color="green">-37.47%</font></span></td>
			        <td><span class="hs01"><font color="red">1.13%</font></span></td>
			        <td><span class="hs01"><font color="red">11.39%</font></span></td>
			        <td><span><font>1329</font></span></td>
			        <td>125056.47</td>
			        <td class="gz_tz">
			            <a href="javascript:void(0);"><img id="45103269" title="奇迹男" class="js_follow" src="http://y2.ifengimg.com/a/2015/0531/bm_04.jpg" width="65" height="21"></a>
			        </td>
			    </tr>
			    
			    </tbody></table>
					</div>
				</div>
			</div>
	    </div>
	    <div  style="display: none;" class="box1801 ls">
		<div class="time02"><span id="js_shipan_date">2016年10月31日收益榜</span></div>
		<div class="box1802 clearfix">
		    <div class="box1802L">
			<ul id="tab19">
			    <li class="js_syb_shipan current" data="1">总收益</li>
			    <li class="js_syb_shipan" data="2">月收益</li>
			    <li class="js_syb_shipan" data="3">周收益</li>
			    <li class="js_syb_shipan" data="4">日收益</li>
			    <li class="js_syb_shipan" data="5">交易额</li>
			</ul>
		    </div>
		    <div class="box1802R sp_container_1">
			<div class="ner"  style="display: block;">
			    
			

			<table class="tab06">
			    <tbody>
			     <tr>
			        <th width="78" class="xm01">排名</th>
			        <th width="140" class="xm02">选手</th>
			        <th width="100">总收益</th>
			        <th width="100">月收益率</th>
			        <th width="100">周收益率</th>
			        <th width="100">日收益率</th>
			        <th width="100">交易额</th>
			    </tr>
			 <tr class="bg02">         <td> 1</td>
			        <td>
			            <a href="/gzs/71831499?type=sp" title="libingxing1982" target="_blank">libingx...</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71831499" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">210.73%</font> </span> </td>
			        <td><span class="hs01"><font color="red">10.31%</font></span></td>
			        <td><span class="hs01"><font color="green">-3.38%</font></span></td>
			        <td><span class="hs01"><font color="green">-3.38%</font></span></td>
			        <td>272530.00</td>
			    </tr>
			     <tr class="">         <td> 2</td>
			        <td>
			            <a href="/gzs/72297405?type=sp" title="雪球一号" target="_blank">雪球一号</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="72297405" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">196.99%</font> </span> </td>
			        <td><span class="hs01"><font color="red">68.60%</font></span></td>
			        <td><span class="hs01"><font color="red">2.55%</font></span></td>
			        <td><span class="hs01"><font color="red">2.55%</font></span></td>
			        <td>151676.00</td>
			    </tr>
			     <tr class="bg02">         <td> 3</td>
			        <td>
			            <a href="/gzs/71558104?type=sp" title="花落杨家2015" target="_blank">花落杨...</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71558104" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">122.65%</font> </span> </td>
			        <td><span class="hs01"><font color="red">21.19%</font></span></td>
			        <td><span class="hs01"><font color="red">1.13%</font></span></td>
			        <td><span class="hs01"><font color="red">1.13%</font></span></td>
			        <td>48532.00</td>
			    </tr>
			     <tr class="">         <td> 4</td>
			        <td>
			            <a href="/gzs/69332917?type=sp" title="彩梦飞10278" target="_blank">彩梦飞1...</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="69332917" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">111.42%</font> </span> </td>
			        <td><span class="hs01"><font color="red">34.84%</font></span></td>
			        <td><span class="hs01"><font color="red">1.63%</font></span></td>
			        <td><span class="hs01"><font color="red">1.63%</font></span></td>
			        <td>81024.00</td>
			    </tr>
			     <tr class="bg02">         <td> 5</td>
			        <td>
			            <a href="/gzs/43655740?type=sp" title="耐心的如意" target="_blank">耐心的如意</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="43655740" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">108.71%</font> </span> </td>
			        <td><span class="hs01"><font color="red">22.30%</font></span></td>
			        <td><span class="hs01"><font color="green">0.00%</font></span></td>
			        <td><span class="hs01"><font color="green">0.00%</font></span></td>
			        <td>0.00</td>
			    </tr>
			     <tr class="">         <td> 6</td>
			        <td>
			            <a href="/gzs/71784115?type=sp" title="伏击黑马" target="_blank">伏击黑马</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71784115" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">101.25%</font> </span> </td>
			        <td><span class="hs01"><font color="red">25.91%</font></span></td>
			        <td><span class="hs01"><font color="green">-1.70%</font></span></td>
			        <td><span class="hs01"><font color="green">-1.70%</font></span></td>
			        <td>229441.00</td>
			    </tr>
			     <tr class="bg02">         <td> 7</td>
			        <td>
			            <a href="/gzs/51043813?type=sp" title="百色老枪" target="_blank">百色老枪</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="51043813" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">80.85%</font> </span> </td>
			        <td><span class="hs01"><font color="red">76.01%</font></span></td>
			        <td><span class="hs01"><font color="green">0.00%</font></span></td>
			        <td><span class="hs01"><font color="green">0.00%</font></span></td>
			        <td>14580.00</td>
			    </tr>
			     <tr class="">         <td> 8</td>
			        <td>
			            <a href="/gzs/73044816?type=sp" title="终有一天能悟道" target="_blank">终有一...</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="73044816" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">78.94%</font> </span> </td>
			        <td><span class="hs01"><font color="red">13.02%</font></span></td>
			        <td><span class="hs01"><font color="red">2.35%</font></span></td>
			        <td><span class="hs01"><font color="red">2.35%</font></span></td>
			        <td>35172.00</td>
			    </tr>
			     <tr class="bg02">         <td> 9</td>
			        <td>
			            <a href="/gzs/72196357?type=sp" title="超短神话" target="_blank">超短神话</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="72196357" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">78.86%</font> </span> </td>
			        <td><span class="hs01"><font color="red">19.52%</font></span></td>
			        <td><span class="hs01"><font color="green">-0.72%</font></span></td>
			        <td><span class="hs01"><font color="green">-0.72%</font></span></td>
			        <td>23095.00</td>
			    </tr>
			     <tr class="">         <td> 10</td>
			        <td>
			            <a href="/gzs/71810165?type=sp" title="牛一k" target="_blank">牛一k</a>
			            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71810165" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
			        </td>
			        <td><span class="hs01"><font color="red">77.33%</font> </span> </td>
			        <td><span class="hs01"><font color="red">20.03%</font></span></td>
			        <td><span class="hs01"><font color="green">0.00%</font></span></td>
			        <td><span class="hs01"><font color="green">0.00%</font></span></td>
			        <td>0.00</td>
			    </tr>
			     </tbody>
			</table>

		</div>
		    <div class="ner" style="display: none;">
					<table class="tab06">
					    <tbody>
					     <tr>
					        <th width="78" class="xm01">排名</th>
					        <th width="140" class="xm02">选手</th>
					        <th width="100">月收益率</th>
					        <th width="100">总收益</th>
					        <th width="100">周收益率</th>
					        <th width="100">日收益率</th>
					        <th width="100">交易额</th>
					    </tr>
					 <tr class="bg02">         <td> 1</td>
					        <td>
					            <a href="/gzs/51043813?type=sp" title="百色老枪" target="_blank">百色老枪</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="51043813" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">76.01%</font></span></td>
					        <td><span class="hs01"><font color="red">80.85%</font> </span> </td>
					        <td><span class="hs01"><font color="green">0.00%</font></span></td>
					        <td><span class="hs01"><font color="green">0.00%</font></span></td>
					        <td>14580.00</td>
					    </tr>
					     <tr class="">         <td> 2</td>
					        <td>
					            <a href="/gzs/58502296?type=sp" title="佛之娇子" target="_blank">佛之娇子</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="58502296" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">74.04%</font></span></td>
					        <td><span class="hs01"><font color="red">61.85%</font> </span> </td>
					        <td><span class="hs01"><font color="red">2.90%</font></span></td>
					        <td><span class="hs01"><font color="red">2.90%</font></span></td>
					        <td>150994.00</td>
					    </tr>
					     <tr class="bg02">         <td> 3</td>
					        <td>
					            <a href="/gzs/72297405?type=sp" title="雪球一号" target="_blank">雪球一号</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="72297405" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">68.60%</font></span></td>
					        <td><span class="hs01"><font color="red">196.99%</font> </span> </td>
					        <td><span class="hs01"><font color="red">2.55%</font></span></td>
					        <td><span class="hs01"><font color="red">2.55%</font></span></td>
					        <td>151676.00</td>
					    </tr>
					     <tr class="">         <td> 4</td>
					        <td>
					            <a href="/gzs/49902425?type=sp" title="金弓老瞄" target="_blank">金弓老瞄</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="49902425" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">54.47%</font></span></td>
					        <td><span class="hs01"><font color="red">56.79%</font> </span> </td>
					        <td><span class="hs01"><font color="green">0.00%</font></span></td>
					        <td><span class="hs01"><font color="green">0.00%</font></span></td>
					        <td>0.00</td>
					    </tr>
					     <tr class="bg02">         <td> 5</td>
					        <td>
					            <a href="/gzs/71947364?type=sp" title="珍惜每一天宁静致远" target="_blank">珍惜每...</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71947364" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">52.96%</font></span></td>
					        <td><span class="hs01"><font color="red">20.96%</font> </span> </td>
					        <td><span class="hs01"><font color="red">10.01%</font></span></td>
					        <td><span class="hs01"><font color="red">10.01%</font></span></td>
					        <td>17409.00</td>
					    </tr>
					     <tr class="">         <td> 6</td>
					        <td>
					            <a href="/gzs/73766164?type=sp" title="zzhengf" target="_blank">zzhengf</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="73766164" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">48.96%</font></span></td>
					        <td><span class="hs01"><font color="red">3.50%</font> </span> </td>
					        <td><span class="hs01"><font color="red">9.82%</font></span></td>
					        <td><span class="hs01"><font color="red">9.82%</font></span></td>
					        <td>0.00</td>
					    </tr>
					     <tr class="bg02">         <td> 7</td>
					        <td>
					            <a href="/gzs/71901221?type=sp" title="kun叔" target="_blank">kun叔</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71901221" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">48.93%</font></span></td>
					        <td><span class="hs01"><font color="red">20.56%</font> </span> </td>
					        <td><span class="hs01"><font color="green">-3.66%</font></span></td>
					        <td><span class="hs01"><font color="green">-3.66%</font></span></td>
					        <td>130736.00</td>
					    </tr>
					     <tr class="">         <td> 8</td>
					        <td>
					            <a href="/gzs/27522675?type=sp" title="OOZHIZHI" target="_blank">OOZHIZHI</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="27522675" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">47.18%</font></span></td>
					        <td><span class="hs01"><font color="green">-1.10%</font> </span> </td>
					        <td><span class="hs01"><font color="red">9.96%</font></span></td>
					        <td><span class="hs01"><font color="red">9.96%</font></span></td>
					        <td>0.00</td>
					    </tr>
					     <tr class="bg02">         <td> 9</td>
					        <td>
					            <a href="/gzs/50269916?type=sp" title="更换5656" target="_blank">更换5656</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50269916" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">46.97%</font></span></td>
					        <td><span class="hs01"><font color="red">46.12%</font> </span> </td>
					        <td><span class="hs01"><font color="green">-1.40%</font></span></td>
					        <td><span class="hs01"><font color="green">-1.40%</font></span></td>
					        <td>6611.00</td>
					    </tr>
					     <tr class="">         <td> 10</td>
					        <td>
					            <a href="/gzs/27616204?type=sp" title="小莱钢" target="_blank">小莱钢</a>
					            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="27616204" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
					        </td>
					        <td><span class="hs01"><font color="red">44.86%</font></span></td>
					        <td><span class="hs01"><font color="red">13.09%</font> </span> </td>
					        <td><span class="hs01"><font color="green">-0.11%</font></span></td>
					        <td><span class="hs01"><font color="green">-0.11%</font></span></td>
					        <td>45799.00</td>
					    </tr>
					     </tbody>
					</table>
		
				</div>
		
			<div class="ner"  style="display: none;">

				<table class="tab06">
				    <tbody>
				     <tr>
				        <th width="78" class="xm01">排名</th>
				        <th width="140" class="xm02">选手</th>
				        <th width="100">周收益率</th>
				        <th width="100">总收益</th>
				        <th width="100">月收益率</th>
				        <th width="100">日收益率</th>
				        <th width="100">交易额</th>
				    </tr>
				 <tr class="bg02">         <td> 1</td>
				        <td>
				            <a href="/gzs/71947364?type=sp" title="珍惜每一天宁静致远" target="_blank">珍惜每...</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71947364" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">10.01%</font></span></td>
				        <td><span class="hs01"><font color="red">20.96%</font> </span> </td>
				        <td><span class="hs01"><font color="red">52.96%</font></span></td>
				        <td><span class="hs01"><font color="red">10.01%</font></span></td>
				        <td>17409.00</td>
				    </tr>
				     <tr class="">         <td> 2</td>
				        <td>
				            <a href="/gzs/73838018?type=sp" title="荔芝815" target="_blank">荔芝815</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="73838018" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td><span class="hs01"><font color="red">9.99%</font> </span> </td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="bg02">         <td> 3</td>
				        <td>
				            <a href="/gzs/71903528?type=sp" title="kkai16" target="_blank">kkai16</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71903528" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td><span class="hs01"><font color="red">21.00%</font> </span> </td>
				        <td><span class="hs01"><font color="red">21.00%</font></span></td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="">         <td> 4</td>
				        <td>
				            <a href="/gzs/50299593?type=sp" title="user50299593" target="_blank">user502...</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50299593" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td><span class="hs01"><font color="red">39.26%</font> </span> </td>
				        <td><span class="hs01"><font color="red">37.07%</font></span></td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="bg02">         <td> 5</td>
				        <td>
				            <a href="/gzs/27522675?type=sp" title="OOZHIZHI" target="_blank">OOZHIZHI</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="27522675" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.96%</font></span></td>
				        <td><span class="hs01"><font color="green">-1.10%</font> </span> </td>
				        <td><span class="hs01"><font color="red">47.18%</font></span></td>
				        <td><span class="hs01"><font color="red">9.96%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="">         <td> 6</td>
				        <td>
				            <a href="/gzs/73766164?type=sp" title="zzhengf" target="_blank">zzhengf</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="73766164" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.82%</font></span></td>
				        <td><span class="hs01"><font color="red">3.50%</font> </span> </td>
				        <td><span class="hs01"><font color="red">48.96%</font></span></td>
				        <td><span class="hs01"><font color="red">9.82%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="bg02">         <td> 7</td>
				        <td>
				            <a href="/gzs/58505156?type=sp" title="牛熊变换" target="_blank">牛熊变换</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="58505156" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.62%</font></span></td>
				        <td><span class="hs01"><font color="red">10.81%</font> </span> </td>
				        <td><span class="hs01"><font color="red">22.95%</font></span></td>
				        <td><span class="hs01"><font color="red">9.62%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="">         <td> 8</td>
				        <td>
				            <a href="/gzs/64522115?type=sp" title="阿杰88888888" target="_blank">阿杰888...</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="64522115" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">7.84%</font></span></td>
				        <td><span class="hs01"><font color="red">34.26%</font> </span> </td>
				        <td><span class="hs01"><font color="red">14.65%</font></span></td>
				        <td><span class="hs01"><font color="red">7.84%</font></span></td>
				        <td>45360.00</td>
				    </tr>
				     <tr class="bg02">         <td> 9</td>
				        <td>
				            <a href="/gzs/50547031?type=sp" title="卧龙飞" target="_blank">卧龙飞</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50547031" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">7.24%</font></span></td>
				        <td><span class="hs01"><font color="green">-40.08%</font> </span> </td>
				        <td><span class="hs01"><font color="red">20.15%</font></span></td>
				        <td><span class="hs01"><font color="red">7.24%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="">         <td> 10</td>
				        <td>
				            <a href="/gzs/54783701?type=sp" title="海蓝之谜66" target="_blank">海蓝之谜66</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="54783701" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">6.96%</font></span></td>
				        <td><span class="hs01"><font color="green">-17.00%</font> </span> </td>
				        <td><span class="hs01"><font color="red">9.30%</font></span></td>
				        <td><span class="hs01"><font color="red">6.96%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     </tbody>
				</table>

			</div>
			
		    <div class="ner" style="display: none;">
				<table class="tab06">
				    <tbody>
				     <tr>
				        <th width="78" class="xm01">排名</th>
				        <th width="140" class="xm02">选手</th>
				        <th width="100">日收益率</th>
				        <th width="100">总收益</th>
				        <th width="100">月收益率</th>
				        <th width="100">周收益率</th>
				        <th width="100">交易额</th>
				    </tr>
				 <tr class="bg02">         <td> 1</td>
				        <td>
				            <a href="/gzs/71947364?type=sp" title="珍惜每一天宁静致远" target="_blank">珍惜每...</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71947364" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">10.01%</font></span></td>
				        <td><span class="hs01"><font color="red">20.96%</font> </span> </td>
				        <td><span class="hs01"><font color="red">52.96%</font></span></td>
				        <td><span class="hs01"><font color="red">10.01%</font></span></td>
				        <td>17409.00</td>
				    </tr>
				     <tr class="">         <td> 2</td>
				        <td>
				            <a href="/gzs/73838018?type=sp" title="荔芝815" target="_blank">荔芝815</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="73838018" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td><span class="hs01"><font color="red">9.99%</font> </span> </td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="bg02">         <td> 3</td>
				        <td>
				            <a href="/gzs/71903528?type=sp" title="kkai16" target="_blank">kkai16</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71903528" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td><span class="hs01"><font color="red">21.00%</font> </span> </td>
				        <td><span class="hs01"><font color="red">21.00%</font></span></td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="">         <td> 4</td>
				        <td>
				            <a href="/gzs/50299593?type=sp" title="user50299593" target="_blank">user502...</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50299593" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td><span class="hs01"><font color="red">39.26%</font> </span> </td>
				        <td><span class="hs01"><font color="red">37.07%</font></span></td>
				        <td><span class="hs01"><font color="red">9.99%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="bg02">         <td> 5</td>
				        <td>
				            <a href="/gzs/27522675?type=sp" title="OOZHIZHI" target="_blank">OOZHIZHI</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="27522675" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.96%</font></span></td>
				        <td><span class="hs01"><font color="green">-1.10%</font> </span> </td>
				        <td><span class="hs01"><font color="red">47.18%</font></span></td>
				        <td><span class="hs01"><font color="red">9.96%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="">         <td> 6</td>
				        <td>
				            <a href="/gzs/73766164?type=sp" title="zzhengf" target="_blank">zzhengf</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="73766164" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.82%</font></span></td>
				        <td><span class="hs01"><font color="red">3.50%</font> </span> </td>
				        <td><span class="hs01"><font color="red">48.96%</font></span></td>
				        <td><span class="hs01"><font color="red">9.82%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="bg02">         <td> 7</td>
				        <td>
				            <a href="/gzs/58505156?type=sp" title="牛熊变换" target="_blank">牛熊变换</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="58505156" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">9.62%</font></span></td>
				        <td><span class="hs01"><font color="red">10.81%</font> </span> </td>
				        <td><span class="hs01"><font color="red">22.95%</font></span></td>
				        <td><span class="hs01"><font color="red">9.62%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="">         <td> 8</td>
				        <td>
				            <a href="/gzs/64522115?type=sp" title="阿杰88888888" target="_blank">阿杰888...</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="64522115" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">7.84%</font></span></td>
				        <td><span class="hs01"><font color="red">34.26%</font> </span> </td>
				        <td><span class="hs01"><font color="red">14.65%</font></span></td>
				        <td><span class="hs01"><font color="red">7.84%</font></span></td>
				        <td>45360.00</td>
				    </tr>
				     <tr class="bg02">         <td> 9</td>
				        <td>
				            <a href="/gzs/50547031?type=sp" title="卧龙飞" target="_blank">卧龙飞</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="50547031" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">7.24%</font></span></td>
				        <td><span class="hs01"><font color="green">-40.08%</font> </span> </td>
				        <td><span class="hs01"><font color="red">20.15%</font></span></td>
				        <td><span class="hs01"><font color="red">7.24%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     <tr class="">         <td> 10</td>
				        <td>
				            <a href="/gzs/54783701?type=sp" title="海蓝之谜66" target="_blank">海蓝之谜66</a>
				            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="54783701" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
				        </td>
				        <td><span class="hs01"><font color="red">6.96%</font></span></td>
				        <td><span class="hs01"><font color="green">-17.00%</font> </span> </td>
				        <td><span class="hs01"><font color="red">9.30%</font></span></td>
				        <td><span class="hs01"><font color="red">6.96%</font></span></td>
				        <td>0.00</td>
				    </tr>
				     </tbody>
				</table>

			</div>
			<div class="ner" style="display: none;">
			 
							<table class="tab06">
							    <tbody>
							     <tr>
							        <th width="78" class="xm01">排名</th>
							        <th width="140" class="xm02">选手</th>
							        <th width="100">交易额</th>
							        <th width="100">总收益</th>
							        <th width="100">月收益率</th>
							        <th width="100">周收益率</th>
							        <th width="100">日收益率</th>
							    </tr>
							 <tr class="bg02">         <td> 1</td>
							        <td>
							            <a href="/gzs/71705706?type=sp" title="瑞安牛牛" target="_blank">瑞安牛牛</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71705706" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>4641032.50</td>
							        <td><span class="hs01"><font color="red">2.36%</font> </span> </td>
							        <td><span class="hs01"><font color="green">-5.72%</font></span></td>
							        <td><span class="hs01"><font color="green">-5.17%</font></span></td>
							        <td><span class="hs01"><font color="green">-5.17%</font></span></td>
							    </tr>
							     <tr class="">         <td> 2</td>
							        <td>
							            <a href="/gzs/71860237?type=sp" title="南京上海证券" target="_blank">南京上...</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71860237" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>809714.69</td>
							        <td><span class="hs01"><font color="green">-1.22%</font> </span> </td>
							        <td><span class="hs01"><font color="green">-1.22%</font></span></td>
							        <td><span class="hs01"><font color="green">-0.54%</font></span></td>
							        <td><span class="hs01"><font color="green">-0.54%</font></span></td>
							    </tr>
							     <tr class="bg02">         <td> 3</td>
							        <td>
							            <a href="/gzs/71860130?type=sp" title="上海证券江东北路" target="_blank">上海证...</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71860130" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>690712.00</td>
							        <td><span class="hs01"><font color="red">0.38%</font> </span> </td>
							        <td><span class="hs01"><font color="red">0.33%</font></span></td>
							        <td><span class="hs01"><font color="green">-0.51%</font></span></td>
							        <td><span class="hs01"><font color="green">-0.51%</font></span></td>
							    </tr>
							     <tr class="">         <td> 4</td>
							        <td>
							            <a href="/gzs/71486601?type=sp" title="煮酒正熟" target="_blank">煮酒正熟</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71486601" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>537926.00</td>
							        <td><span class="hs01"><font color="green">-14.73%</font> </span> </td>
							        <td><span class="hs01"><font color="red">11.10%</font></span></td>
							        <td><span class="hs01"><font color="green">-4.18%</font></span></td>
							        <td><span class="hs01"><font color="green">-4.18%</font></span></td>
							    </tr>
							     <tr class="bg02">         <td> 5</td>
							        <td>
							            <a href="/gzs/45391725?type=sp" title="逝去de风" target="_blank">逝去de风</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="45391725" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>504420.00</td>
							        <td><span class="hs01"><font color="green">-5.74%</font> </span> </td>
							        <td><span class="hs01"><font color="green">-5.74%</font></span></td>
							        <td><span class="hs01"><font color="green">-1.26%</font></span></td>
							        <td><span class="hs01"><font color="green">-1.26%</font></span></td>
							    </tr>
							     <tr class="">         <td> 6</td>
							        <td>
							            <a href="/gzs/71902894?type=sp" title="孔雀王6611" target="_blank">孔雀王6611</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71902894" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>498304.00</td>
							        <td><span class="hs01"><font color="red">53.72%</font> </span> </td>
							        <td><span class="hs01"><font color="red">26.97%</font></span></td>
							        <td><span class="hs01"><font color="red">6.59%</font></span></td>
							        <td><span class="hs01"><font color="red">6.59%</font></span></td>
							    </tr>
							     <tr class="bg02">         <td> 7</td>
							        <td>
							            <a href="/gzs/75069231?type=sp" title="MMRENG" target="_blank">MMRENG</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="75069231" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>439709.00</td>
							        <td><span class="hs01"><font color="green">-2.63%</font> </span> </td>
							        <td><span class="hs01"><font color="green">-2.63%</font></span></td>
							        <td><span class="hs01"><font color="red">0.46%</font></span></td>
							        <td><span class="hs01"><font color="red">0.46%</font></span></td>
							    </tr>
							     <tr class="">         <td> 8</td>
							        <td>
							            <a href="/gzs/48329535?type=sp" title="紫水晶1314" target="_blank">紫水晶1314</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="48329535" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>413963.00</td>
							        <td><span class="hs01"><font color="green">-39.27%</font> </span> </td>
							        <td><span class="hs01"><font color="red">4.99%</font></span></td>
							        <td><span class="hs01"><font color="red">5.59%</font></span></td>
							        <td><span class="hs01"><font color="red">5.59%</font></span></td>
							    </tr>
							     <tr class="bg02">         <td> 9</td>
							        <td>
							            <a href="/gzs/57779105?type=sp" title="YZW298" target="_blank">YZW298</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="57779105" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>345592.00</td>
							        <td><span class="hs01"><font color="red">73.01%</font> </span> </td>
							        <td><span class="hs01"><font color="red">3.33%</font></span></td>
							        <td><span class="hs01"><font color="green">-1.16%</font></span></td>
							        <td><span class="hs01"><font color="green">-1.16%</font></span></td>
							    </tr>
							     <tr class="">         <td> 10</td>
							        <td>
							            <a href="/gzs/71813032?type=sp" title="我是地平线" target="_blank">我是地平线</a>
							            <img src="http://y0.ifengimg.com/a/2014/0723/s02.png" class="js_popularity" data="71813032" width="11" height="12" style="vertical-align: middle; margin-left: 9px; cursor:pointer;">
							        </td>
							        <td>288759.00</td>
							        <td><span class="hs01"><font color="red">70.00%</font> </span> </td>
							        <td><span class="hs01"><font color="red">8.58%</font></span></td>
							        <td><span class="hs01"><font color="green">-0.90%</font></span></td>
							        <td><span class="hs01"><font color="green">-0.90%</font></span></td>
							    </tr>
							     </tbody>
							</table>

					</div>
		    		</div>
			</div>
	    </div>
	    <div style="display: none;" class="box1801 ls">
		<div class="time02"><span id="js_team_date">2017年08月16日收益榜</span></div>
		<div class="box1802 clearfix">
		    <div class="box1802L">
			<ul id="tab20">
			    <li class="js_syb_team" data="1">月收益</li>
			    <li class="js_syb_team" data="2">周收益</li>
			    <li class="js_syb_team current" data="3">日收益</li>
			</ul>
		    </div>
		    <div class="box1802R team_container_1">
			<div class="ner_1" style="display: none;">
			  
			<table class="tab06">
		       <tbody>
		     <tr>
		        <th width="78" class="xm01">排名</th>
		        <th width="" class="xm02">队伍名称</th>
		        <th width="">月收益</th>
		        <th width="">周收益</th>
		        <th width="">日收益</th>
		    </tr>
        <tr class="bg02">
	    <td>1</td>
	        <td>
	            <a href="/team/10028" title="股往金来" target="_blank">股往金来</a>
	        </td>
	        <td><span class="hs01"><font color="red">42.88%</font></span></td>
	        <td><span class="hs01"><font color="red">14.98%</font></span></td>
	        <td><span class="hs01"><font color="red">3.96%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10028" tname="股往金来" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>2</td>
	        <td>
	            <a href="/team/10002" title="涨停板战队" target="_blank">涨停板战队</a>
	        </td>
	        <td><span class="hs01"><font color="red">31.23%</font></span></td>
	        <td><span class="hs01"><font color="red">12.10%</font></span></td>
	        <td><span class="hs01"><font color="red">3.02%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10002" tname="涨停板战队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>3</td>
	        <td>
	            <a href="/team/10086" title="冠军之队" target="_blank">冠军之队</a>
	        </td>
	        <td><span class="hs01"><font color="red">26.82%</font></span></td>
	        <td><span class="hs01"><font color="red">9.74%</font></span></td>
	        <td><span class="hs01"><font color="red">3.23%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10086" tname="冠军之队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>4</td>
	        <td>
	            <a href="/team/10078" title="月光女神" target="_blank">月光女神</a>
	        </td>
	        <td><span class="hs01"><font color="red">22.14%</font></span></td>
	        <td><span class="hs01"><font color="red">8.91%</font></span></td>
	        <td><span class="hs01"><font color="red">1.94%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10078" tname="月光女神" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>5</td>
	        <td>
	            <a href="/team/10042" title="逍遥者" target="_blank">逍遥者</a>
	        </td>
	        <td><span class="hs01"><font color="red">21.04%</font></span></td>
	        <td><span class="hs01"><font color="red">7.75%</font></span></td>
	        <td><span class="hs01"><font color="red">1.76%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10042" tname="逍遥者" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>6</td>
	        <td>
	            <a href="/team/10075" title="地表最强战队" target="_blank">地表最强战队</a>
	        </td>
	        <td><span class="hs01"><font color="red">20.22%</font></span></td>
	        <td><span class="hs01"><font color="red">8.09%</font></span></td>
	        <td><span class="hs01"><font color="red">1.53%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10075" tname="地表最强战队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>7</td>
	        <td>
	            <a href="/team/10020" title="涨停板战一队" target="_blank">涨停板战一队</a>
	        </td>
	        <td><span class="hs01"><font color="red">17.49%</font></span></td>
	        <td><span class="hs01"><font color="red">7.76%</font></span></td>
	        <td><span class="hs01"><font color="red">1.85%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10020" tname="涨停板战一队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>8</td>
	        <td>
	            <a href="/team/10084" title="天王盖地虎" target="_blank">天王盖地虎</a>
	        </td>
	        <td><span class="hs01"><font color="red">11.56%</font></span></td>
	        <td><span class="hs01"><font color="red">5.16%</font></span></td>
	        <td><span class="hs01"><font color="red">0.98%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10084" tname="天王盖地虎" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>9</td>
	        <td>
	            <a href="/team/10063" title="火焰鸟" target="_blank">火焰鸟</a>
	        </td>
	        <td><span class="hs01"><font color="red">7.59%</font></span></td>
	        <td><span class="hs01"><font color="red">3.70%</font></span></td>
	        <td><span class="hs01"><font color="red">0.76%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10063" tname="火焰鸟" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>10</td>
	        <td>
	            <a href="/team/10008" title="海啸党" target="_blank">海啸党</a>
	        </td>
	        <td><span class="hs01"><font color="red">7.50%</font></span></td>
	        <td><span class="hs01"><font color="red">3.51%</font></span></td>
	        <td><span class="hs01"><font color="red">0.70%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10008" tname="海啸党" ajax="0">申请加入</a></td>
	    </tr>
	        </tbody></table></div>
				<div class="ner_1" style="display: none;">
				 
				<table class="tab06">
			        <tbody><tr>
			        <th width="78" class="xm01">排名</th>
			        <th width="" class="xm02">队伍名称</th>
			        <th width="">周收益</th>
			        <th width="">月收益</th>
			        <th width="">日收益</th>
			        <th></th>
			    </tr>
			        <tr class="bg02">
			    <td>1</td>
	        <td>
	            <a href="/team/10028" title="股往金来" target="_blank">股往金来</a>
	        </td>
	        <td><span class="hs01"><font color="red">14.98%</font></span></td>
	        <td><span class="hs01"><font color="red">42.88%</font></span></td>
	        <td><span class="hs01"><font color="red">3.96%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10028" tname="股往金来" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>2</td>
	        <td>
	            <a href="/team/10002" title="涨停板战队" target="_blank">涨停板战队</a>
	        </td>
	        <td><span class="hs01"><font color="red">12.10%</font></span></td>
	        <td><span class="hs01"><font color="red">31.23%</font></span></td>
	        <td><span class="hs01"><font color="red">3.02%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10002" tname="涨停板战队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>3</td>
	        <td>
	            <a href="/team/10086" title="冠军之队" target="_blank">冠军之队</a>
	        </td>
	        <td><span class="hs01"><font color="red">9.74%</font></span></td>
	        <td><span class="hs01"><font color="red">26.82%</font></span></td>
	        <td><span class="hs01"><font color="red">3.23%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10086" tname="冠军之队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>4</td>
	        <td>
	            <a href="/team/10078" title="月光女神" target="_blank">月光女神</a>
	        </td>
	        <td><span class="hs01"><font color="red">8.91%</font></span></td>
	        <td><span class="hs01"><font color="red">22.14%</font></span></td>
	        <td><span class="hs01"><font color="red">1.94%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10078" tname="月光女神" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>5</td>
	        <td>
	            <a href="/team/10075" title="地表最强战队" target="_blank">地表最强战队</a>
	        </td>
	        <td><span class="hs01"><font color="red">8.09%</font></span></td>
	        <td><span class="hs01"><font color="red">20.22%</font></span></td>
	        <td><span class="hs01"><font color="red">1.53%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10075" tname="地表最强战队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>6</td>
	        <td>
	            <a href="/team/10020" title="涨停板战一队" target="_blank">涨停板战一队</a>
	        </td>
	        <td><span class="hs01"><font color="red">7.76%</font></span></td>
	        <td><span class="hs01"><font color="red">17.49%</font></span></td>
	        <td><span class="hs01"><font color="red">1.85%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10020" tname="涨停板战一队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>7</td>
	        <td>
	            <a href="/team/10042" title="逍遥者" target="_blank">逍遥者</a>
	        </td>
	        <td><span class="hs01"><font color="red">7.75%</font></span></td>
	        <td><span class="hs01"><font color="red">21.04%</font></span></td>
	        <td><span class="hs01"><font color="red">1.76%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10042" tname="逍遥者" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>8</td>
	        <td>
	            <a href="/team/10084" title="天王盖地虎" target="_blank">天王盖地虎</a>
	        </td>
	        <td><span class="hs01"><font color="red">5.16%</font></span></td>
	        <td><span class="hs01"><font color="red">11.56%</font></span></td>
	        <td><span class="hs01"><font color="red">0.98%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10084" tname="天王盖地虎" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>9</td>
	        <td>
	            <a href="/team/10047" title="索罗斯战队" target="_blank">索罗斯战队</a>
	        </td>
	        <td><span class="hs01"><font color="red">3.71%</font></span></td>
	        <td><span class="hs01"><font color="red">6.06%</font></span></td>
	        <td><span class="hs01"><font color="red">0.76%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10047" tname="索罗斯战队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>10</td>
	        <td>
	            <a href="/team/10063" title="火焰鸟" target="_blank">火焰鸟</a>
	        </td>
	        <td><span class="hs01"><font color="red">3.70%</font></span></td>
	        <td><span class="hs01"><font color="red">7.59%</font></span></td>
	        <td><span class="hs01"><font color="red">0.76%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10063" tname="火焰鸟" ajax="0">申请加入</a></td>
	    </tr>
	        </tbody></table></div>
				<div class="ner_1" style="display: block;">
				  
				<table class="tab06">
	        <tbody><tr>
	        <th width="78" class="xm01">排名</th>
	        <th width="" class="xm02">队伍名称</th>
	        <th width="">日收益</th>
	        <th width="">月收益</th>
	        <th width="">周收益</th>
	        <th></th>
	    </tr>
	        <tr class="bg02">
	    <td>1</td>
	        <td>
	            <a href="/team/10028" title="股往金来" target="_blank">股往金来</a>
	        </td>
	        <td><span class="hs01"><font color="red">3.96%</font></span></td>
	        <td><span class="hs01"><font color="red">42.88%</font></span></td>
	        <td><span class="hs01"><font color="red">14.98%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10028" tname="股往金来" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>2</td>
	        <td>
	            <a href="/team/10086" title="冠军之队" target="_blank">冠军之队</a>
	        </td>
	        <td><span class="hs01"><font color="red">3.23%</font></span></td>
	        <td><span class="hs01"><font color="red">26.82%</font></span></td>
	        <td><span class="hs01"><font color="red">9.74%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10086" tname="冠军之队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>3</td>
	        <td>
	            <a href="/team/10002" title="涨停板战队" target="_blank">涨停板战队</a>
	        </td>
	        <td><span class="hs01"><font color="red">3.02%</font></span></td>
	        <td><span class="hs01"><font color="red">31.23%</font></span></td>
	        <td><span class="hs01"><font color="red">12.10%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10002" tname="涨停板战队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>4</td>
	        <td>
	            <a href="/team/10078" title="月光女神" target="_blank">月光女神</a>
	        </td>
	        <td><span class="hs01"><font color="red">1.94%</font></span></td>
	        <td><span class="hs01"><font color="red">22.14%</font></span></td>
	        <td><span class="hs01"><font color="red">8.91%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10078" tname="月光女神" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>5</td>
	        <td>
	            <a href="/team/10020" title="涨停板战一队" target="_blank">涨停板战一队</a>
	        </td>
	        <td><span class="hs01"><font color="red">1.85%</font></span></td>
	        <td><span class="hs01"><font color="red">17.49%</font></span></td>
	        <td><span class="hs01"><font color="red">7.76%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10020" tname="涨停板战一队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>6</td>
	        <td>
	            <a href="/team/10042" title="逍遥者" target="_blank">逍遥者</a>
	        </td>
	        <td><span class="hs01"><font color="red">1.76%</font></span></td>
	        <td><span class="hs01"><font color="red">21.04%</font></span></td>
	        <td><span class="hs01"><font color="red">7.75%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10042" tname="逍遥者" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>7</td>
	        <td>
	            <a href="/team/10075" title="地表最强战队" target="_blank">地表最强战队</a>
	        </td>
	        <td><span class="hs01"><font color="red">1.53%</font></span></td>
	        <td><span class="hs01"><font color="red">20.22%</font></span></td>
	        <td><span class="hs01"><font color="red">8.09%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10075" tname="地表最强战队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>8</td>
	        <td>
	            <a href="/team/10084" title="天王盖地虎" target="_blank">天王盖地虎</a>
	        </td>
	        <td><span class="hs01"><font color="red">0.98%</font></span></td>
	        <td><span class="hs01"><font color="red">11.56%</font></span></td>
	        <td><span class="hs01"><font color="red">5.16%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10084" tname="天王盖地虎" ajax="0">申请加入</a></td>
	    </tr>
	        <tr class="bg02">
	    <td>9</td>
	        <td>
	            <a href="/team/10047" title="索罗斯战队" target="_blank">索罗斯战队</a>
	        </td>
	        <td><span class="hs01"><font color="red">0.76%</font></span></td>
	        <td><span class="hs01"><font color="red">6.06%</font></span></td>
	        <td><span class="hs01"><font color="red">3.71%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10047" tname="索罗斯战队" ajax="0">申请加入</a></td>
	    </tr>
	        <tr>
	    <td>10</td>
	        <td>
	            <a href="/team/10063" title="火焰鸟" target="_blank">火焰鸟</a>
	        </td>
	        <td><span class="hs01"><font color="red">0.76%</font></span></td>
	        <td><span class="hs01"><font color="red">7.59%</font></span></td>
	        <td><span class="hs01"><font color="red">3.70%</font></span></td>
	        <td class="gz_tz"><a href="javascript:void(0);" class="js_team_app" tid="10063" tname="火焰鸟" ajax="0">申请加入</a></td>
	    </tr>
	        </tbody></table></div>
			    </div>
			</div>
		    </div>
	        </div>
	    </div>
	    


</div>
          </div>
          
	    </div>
       
       </div>
    </div>
    <script src="/gitkunl/kl/kuluncom/Public/index/js/jquery-1.11.0.min.js"></script>
    <script src="/gitkunl/kl/kuluncom/Public/index/js/zui.min.js"></script>
     <script>
     	function _hdm(tab1, tab2, tab3) {
			$(tab1).click(function() {
				$(tab1).removeClass(tab3);
				$(this).addClass(tab3);
				var id = $(tab1).index(this);
				$(tab2).hide();
				$(tab2).eq(id).show();
			})
		}
     	 _hdm('#tab_ss li', '.kl_lia_con .lia0n1', 'active');
		 _hdm('.list0a li', '.box18 .ls', 'current');
		 _hdm('#tab18 li', '.box1802 .gs', 'current');
		 _hdm('#tab19 li', '.sp_container_1 .ner', 'current');
		 _hdm('#tab20 li', '.team_container_1 .ner_1', 'current');
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