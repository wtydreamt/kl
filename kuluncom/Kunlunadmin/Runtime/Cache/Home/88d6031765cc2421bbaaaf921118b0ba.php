<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta charset="utf-8" />
		<title>昆仑财富</title>

		<meta name="description" content="This is page-header (.page-header &gt; h1)" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

		<link rel="stylesheet" href="/gitkunl/kl/kuluncom/Public/assets/css/bootstrap.min.css" />
		<link rel="stylesheet" href="/gitkunl/kl/kuluncom/Public/assets/css/font-awesome.min.css" />
		<link rel="stylesheet" href="/gitkunl/kl/kuluncom/Public/assets/css/ace.min.css" id="main-ace-style" />
		<link rel="stylesheet" href="/gitkunl/kl/kuluncom/Public/assets/css/ace-skins.min.css" />
		<link rel="stylesheet" href="/gitkunl/kl/kuluncom/Public/assets/css/ace-rtl.min.css" />

	</head>
		<body class="no-skin">
		<div id="navbar" class="navbar navbar-default">
			<div class="navbar-container" id="navbar-container">

				<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler">
					<span class="sr-only">Toggle sidebar</span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>
				</button>

				<!-- /section:basics/sidebar.mobile.toggle -->
				<div class="navbar-header pull-left">
					<!-- #section:basics/navbar.layout.brand -->
					<a href="<?php echo U('Home/Index/index');?>" class="navbar-brand">
						<small>
							<img src="/gitkunl/kl/kuluncom/Public/assets/avatars/logo.png" alt="" />
						</small>
					</a>
				</div>

				<div class="navbar-buttons navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">

						<li class="green">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="ace-icon fa fa-envelope icon-animated-vertical"></i>
								<span class="badge badge-success">5</span>
							</a>

							<ul class="dropdown-menu-right dropdown-navbar dropdown-menu dropdown-caret dropdown-close">
								<li class="dropdown-header">
									<i class="ace-icon fa fa-envelope-o"></i>
									13条未读信息
								</li>

								<li class="dropdown-content">
									<ul class="dropdown-menu dropdown-navbar">
										<li>
											<a href="#">
												<img src="/gitkunl/kl/kuluncom/Public/assets/avatars/avatar.png" class="msg-photo" alt="Alex's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">B2C:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/gitkunl/kl/kuluncom/Public/assets/avatars/avatar3.png" class="msg-photo" alt="Susan's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">积分商城:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/gitkunl/kl/kuluncom/Public/assets/avatars/avatar4.png" class="msg-photo" alt="Bob's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">政府机票采购:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/gitkunl/kl/kuluncom/Public/assets/avatars/avatar2.png" class="msg-photo" alt="Kate's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">B2B:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>

										<li>
											<a href="#">
												<img src="/gitkunl/kl/kuluncom/Public/assets/avatars/avatar5.png" class="msg-photo" alt="Fred's Avatar" />
												<span class="msg-body">
													<span class="msg-title">
														<span class="blue">货运系统:</span>
														系统产生20个错误，12个警告...
													</span>

													<span class="msg-time">
														<i class="ace-icon fa fa-clock-o"></i>
														<span>2014-12-15 18:00:00</span>
													</span>
												</span>
											</a>
										</li>
									</ul>
								</li>

								<li class="dropdown-footer">
									<a href="inbox.html">
										查看全部消息
										<i class="ace-icon fa fa-arrow-right"></i>
									</a>
								</li>
							</ul>
						</li>

						<!-- #section:basics/navbar.user_menu -->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/gitkunl/kl/kuluncom/Public/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									欢迎您<br />
									陈子昂
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>

							<ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="#">
										<i class="ace-icon fa fa-cog"></i>
										系统设置
									</a>
								</li>

								<li>
									<a href="profile.html">
										<i class="ace-icon fa fa-user"></i>
										个人信息设置
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="#">
										<i class="ace-icon fa fa-power-off"></i>
										登出
									</a>
								</li>
							</ul>
						</li>

						<!-- /section:basics/navbar.user_menu -->
					</ul>
				</div>

				<!-- /section:basics/navbar.dropdown -->
			</div><!-- /.navbar-container -->
		</div>


		<!-- /section:basics/navbar.layout -->
		<div class="main-container" id="main-container">

			<!-- #section:basics/sidebar -->
			<div id="sidebar" class="sidebar responsive">


				<ul class="nav nav-list">
					<li class="active">
						<a href="index.html">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> 总控制台 </span>
						</a>

						<b class="arrow"></b>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-desktop"></i>
							<span class="menu-text"> 人员管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">

							<li class="">
								<a href="<?php echo U('Home/Personnel/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									添加人员
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="buttons.html">
									<i class="menu-icon fa fa-caret-right"></i>
									人员列表
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="treeview.html">
									<i class="menu-icon fa fa-caret-right"></i>
									用户列表
								</a>

								<b class="arrow"></b>
							</li>



						</ul>
					</li>

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> 角色管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo U('Power/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									添加角色
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo U('Power/rolelist');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									角色列表
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-pencil-square-o"></i>
							<span class="menu-text"> 节点管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="form-elements.html">
									<i class="menu-icon fa fa-caret-right"></i>
									新建节点
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="form-wizard.html">
									<i class="menu-icon fa fa-caret-right"></i>
									向导提示 &amp; 验证
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="wysiwyg.html">
									<i class="menu-icon fa fa-caret-right"></i>
									编辑器
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="dropzone.html">
									<i class="menu-icon fa fa-caret-right"></i>
									文件上传
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> 活动管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo U('Activity/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									赛事设置
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> 讲师中心 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo U('Lecturer/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									个人资料
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>					
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> vip策略 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo U('Strategy/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									发布观点
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo U('Power/rolelist');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									设置课程
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> 分类管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo U('Category/viewpoint');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									观点分类
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo U('Category/labe');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									标签设置
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo U('Category/system');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									操盘体系
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> 实战回顾 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo U('Review/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									实战辅导
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>																
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> 站点管理 </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo U('Site/chief');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									首页推荐
								</a>

								<b class="arrow"></b>
							</li>
							<li class="">
								<a href="<?php echo U('Site/banner');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									banner图
								</a>

								<b class="arrow"></b>
							</li>							
						</ul>
					</li>							
				</ul><!-- /.nav-list -->

				<!-- #section:basics/sidebar.layout.minimize -->
	<!-- 			<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i class="ace-icon fa fa-angle-double-left" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div> -->

			</div>

			<!-- /section:basics/sidebar -->



     			<div class="main-content">
				<!-- #section:basics/content.breadcrumbs -->
				<div class="breadcrumbs" id="breadcrumbs">
					<ul class="breadcrumb">
						<li>
							<i class="ace-icon fa fa-home home-icon"></i>
							<a href="<?php echo U('Home/Lecturer/edit');?>">编辑个人资料</a>
						</li>
					</ul><!-- /.breadcrumb -->

					<!-- #section:basics/content.searchbox -->
					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<a href="<?php echo U('Home/Lecturer/index');?>" class="nav-search-input">个人资料</a>
							</span>
						</form>
					</div><!-- /.nav-search -->

					<!-- /section:basics/content.searchbox -->
				</div>

				<div class="page-content">
					<div class="page-content-area">

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<form class="form-horizontal" role="form" action="<?php echo U('Home/Lecturer/edit');?>"  enctype="multipart/form-data" method="post">
									<!-- #section:elements.form -->
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 昵称：</label>

										<div class="col-sm-9">
											<input type="text" name="nickname" value="<?php echo ($admin_user["nickname"]); ?>" id="form-field-1" placeholder="输入部门名称" class="col-xs-10 col-sm-5" />
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="limited">头像：</label>
										<div class="col-sm-9">
											<div class="pos-rel">
												<input type="file" name="head_img"  class="col-xs-10 col-sm-5" />
											</div>
										</div>
									</div>
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1-1">地址： </label>

										<div class="col-sm-9">
											<input type="text" name="address" value="<?php echo ($admin_user["address"]); ?>" id="form-field-1-1" placeholder="输入差旅单名称" class=" col-xs-10 col-sm-5" />
										</div>
									</div>

									<!-- /section:elements.form -->
									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-2">年龄： </label>

										<div class="col-sm-9">
											<input type="text" name="age" value="<?php echo ($admin_user["age"]); ?>" id="form-field-2" placeholder="年龄" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">所属机构：</label>

										<div class="col-sm-9">
											<input type="text" name="mechanism" value="<?php echo ($admin_user["mechanism"]); ?>" id="form-field-2" placeholder="所属机构" class="col-xs-10 col-sm-5" />
										</div>
									</div>


									<div class="space-4"></div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-input-readonly">从业年限： </label>

										<div class="col-sm-9">
											<input type="text" name="Industry_time" value="<?php echo ($admin_user["Industry_time"]); ?>" id="form-field-2" placeholder="从业年限" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="typeahead">个人签名：</label>

										<div class="col-sm-9">
											<!-- #section:plugins/bootstrap.typeahead-js -->
											<div class="pos-rel">
												<input type="text" name="autograph" value="<?php echo ($admin_user["autograph"]); ?>" id="form-field-2" placeholder="个人签名" class="col-xs-10 col-sm-5" />
											</div>

											<!-- /section:plugins/bootstrap.typeahead-js -->
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="limited">个人简介：</label>
										<div class="col-sm-9">
											<div class="pos-rel">
												<textarea class="form-control limited autosize-transition" name="describe" id="limited" maxlength="300"><?php echo ($admin_user["describe"]); ?></textarea>
											</div>
										</div>
									</div>


									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-tags">擅长领域：</label>
										<div class="col-sm-2">
											<?php if(!empty($label)): if(is_array($label)): foreach($label as $key=>$v): ?><div class="checkbox" style="float: left">
														<label>
															<input name="labe[]" value="<?php echo ($v["id"]); ?>" type="checkbox"  class="ace" />
															<span class="lbl"> <?php echo ($v["name"]); ?></span>
														</label>
													</div><?php endforeach; endif; endif; ?>																															
										</div>
									</div>


									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<input class="btn btn-info" type="submit" value="立即提交">
											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												重置
											</button>
										</div>
									</div>

								</form>

							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content-area -->
				</div><!-- /.page-content -->
			</div><!-- /.main-content -->

			<div class="footer">
				<div class="footer-inner">
					<!-- #section:basics/footer -->
					<div class="footer-content">
						<span class="bigger-120">
							 昆仑财富资源统一管理平台
						</span>
					</div>

					<!-- /section:basics/footer -->
				</div>
			</div>

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!--[if !IE]> -->


	</body>
</html>			
			<script type="text/javascript">
				window.jQuery || document.write("<script src='/gitkunl/kl/kuluncom/Public/assets/js/jquery.min.js'>"+"<"+"/script>");
			</script>
		<!-- <![endif]-->
		<!--[if IE]>
			<script type="text/javascript">
			 window.jQuery || document.write("<script src='assets/js/jquery1x.min.js'>"+"<"+"/script>");
			</script>
		<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='/gitkunl/kl/kuluncom/Public/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
		</script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/bootstrap.min.js"></script>
		<!--[if lte IE 8]>
		  <script src="assets/js/excanvas.min.js"></script>
		<![endif]-->
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/jquery-ui.custom.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/ace-elements.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/ace.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/chosen.jquery.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/fuelux/fuelux.spinner.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/date-time/bootstrap-datepicker.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/date-time/bootstrap-timepicker.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/date-time/moment.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/date-time/daterangepicker.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/date-time/bootstrap-datetimepicker.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/bootstrap-colorpicker.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/jquery.knob.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/jquery.autosize.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/jquery.maskedinput.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/bootstrap-tag.min.js"></script>
		<script src="/gitkunl/kl/kuluncom/Public/assets/js/typeahead.jquery.min.js"></script>