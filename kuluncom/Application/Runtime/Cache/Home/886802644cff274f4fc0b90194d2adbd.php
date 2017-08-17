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
									表单组件
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
								<a href="<?php echo U('Power/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									赛事介绍
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo U('Power/rolelist');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									奖项设置
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
								<a href="<?php echo U('Power/index');?>">
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
								<a href="<?php echo U('Power/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									观点分类
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo U('Power/rolelist');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									标签设置
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
								<a href="<?php echo U('Power/index');?>">
									<i class="menu-icon fa fa-caret-right"></i>
									实战辅导
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
							<a href="<?php echo U('Home/Personnel/rolelist');?>">角色列表</a>
						</li>
					</ul><!-- /.breadcrumb -->

					<!-- #section:basics/content.searchbox -->
					<div class="nav-search" id="nav-search">
						<form class="form-search">
							<span class="input-icon">
								<input type="text" placeholder="请输入关键字 ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
								<i class="ace-icon fa fa-search nav-search-icon"></i>
							</span>
						</form>
					</div><!-- /.nav-search -->

					<!-- /section:basics/content.searchbox -->
				</div>

				<div class="page-content">
					<!-- /section:settings.box -->
					<div class="page-content-area">
									<div class="col-xs-12">

										<div class="table-responsive">

											<table id="sample-table-2" class="table table-striped table-bordered table-hover">
												<thead>
													<tr>
														<th class="center">
															<label class="position-relative">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</th>
														<th>部门</th>
				                                        <th>差旅单号</th>
				                                        <th>名称</th>
				                                        <th>关联订单号</th>
				                                        <th>差旅单状态</th>
				                                        <th>创建人</th>
				                                        <th>创建日期</th>
														<th>操作</th>
													</tr>
												</thead>

												<tbody>
													<tr>
														<td class="center">
															<label class="position-relative">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>商务研发部</td>
				                                        <td><a href="#"  class="yuangongBtn" rel="#yuangong">CL1234567891234567</a></td>
				                                        <td class="hidden-480">C1234567891234</td>
				                                        <td class="hidden-480"><span class="label label-sm label-warning">广州北京0801</span></td>
				                                        <td>未提交</td>
				                                        <td>张国立</td>
				                                        <td>2012-08-01</td>
														<td>
															<div class="hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success" title="">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="ace-icon fa fa-pencil bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="ace-icon fa fa-flag bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label class="position-relative">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>商务研发部</td>
				                                        <td><a href="#"  class="yuangongBtn" rel="#yuangong">CL1234567891234567</a></td>
				                                        <td class="hidden-480">C1234567891234</td>
				                                        <td class="hidden-480"><span class="label label-sm label-warning">广州北京0801</span></td>
				                                        <td>未提交</td>
				                                        <td>张国立</td>
				                                        <td>2012-08-01</td>
														<td>
															<div class="hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success" title="">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="ace-icon fa fa-pencil bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="ace-icon fa fa-flag bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label class="position-relative">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>商务研发部</td>
				                                        <td><a href="#"  class="yuangongBtn" rel="#yuangong">CL1234567891234567</a></td>
				                                        <td class="hidden-480">C1234567891234</td>
				                                        <td class="hidden-480"><span class="label label-sm label-warning">广州北京0801</span></td>
				                                        <td>未提交</td>
				                                        <td>张国立</td>
				                                        <td>2012-08-01</td>
														<td>
															<div class="hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success" title="">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="ace-icon fa fa-pencil bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="ace-icon fa fa-flag bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label class="position-relative">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>商务研发部</td>
				                                        <td><a href="#"  class="yuangongBtn" rel="#yuangong">CL1234567891234567</a></td>
				                                        <td class="hidden-480">C1234567891234</td>
				                                        <td class="hidden-480"><span class="label label-sm label-warning">广州北京0801</span></td>
				                                        <td>未提交</td>
				                                        <td>张国立</td>
				                                        <td>2012-08-01</td>
														<td>
															<div class="hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success" title="">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="ace-icon fa fa-pencil bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="ace-icon fa fa-flag bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label class="position-relative">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>商务研发部</td>
				                                        <td><a href="#"  class="yuangongBtn" rel="#yuangong">CL1234567891234567</a></td>
				                                        <td class="hidden-480">C1234567891234</td>
				                                        <td class="hidden-480"><span class="label label-sm label-warning">广州北京0801</span></td>
				                                        <td>未提交</td>
				                                        <td>张国立</td>
				                                        <td>2012-08-01</td>
														<td>
															<div class="hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success" title="">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="ace-icon fa fa-pencil bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="ace-icon fa fa-flag bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</div>
														</td>
													</tr>

													<tr>
														<td class="center">
															<label class="position-relative">
																<input type="checkbox" class="ace" />
																<span class="lbl"></span>
															</label>
														</td>

														<td>商务研发部</td>
				                                        <td><a href="#"  class="yuangongBtn" rel="#yuangong">CL1234567891234567</a></td>
				                                        <td class="hidden-480">C1234567891234</td>
				                                        <td class="hidden-480"><span class="label label-sm label-warning">广州北京0801</span></td>
				                                        <td>未提交</td>
				                                        <td>张国立</td>
				                                        <td>2012-08-01</td>
														<td>
															<div class="hidden-sm hidden-xs btn-group">
																<button class="btn btn-xs btn-success" title="">
																	<i class="ace-icon fa fa-search-plus bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-info">
																	<i class="ace-icon fa fa-pencil bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-danger">
																	<i class="ace-icon fa fa-trash-o bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-warning">
																	<i class="ace-icon fa fa-flag bigger-120"></i>
																</button>

																<button class="btn btn-xs btn-success">
																	<i class="ace-icon fa fa-check bigger-120"></i>
																</button>
															</div>
														</td>
													</tr>
												</tbody>
											</table>

											<div class="modal-footer no-margin-top">

												<ul class="pagination pull-right no-margin">
													<li class="prev disabled">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-left"></i>
														</a>
													</li>

													<li class="active">
														<a href="#">1</a>
													</li>

													<li>
														<a href="#">2</a>
													</li>

													<li>
														<a href="#">3</a>
													</li>

													<li class="next">
														<a href="#">
															<i class="ace-icon fa fa-angle-double-right"></i>
														</a>
													</li>
												</ul>
											</div>

										</div>

										


									</div>

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