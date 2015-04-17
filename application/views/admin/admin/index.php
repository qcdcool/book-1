<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>图书管理系统</title>
	<link rel="stylesheet" href="<?php echo base_url('style/admin/css/admin.css')?>" />
	<script type="text/javascript" src="<?php echo base_url('style/admin/js/jquery-1.7.2.min.js')?>"></script>
	<script type="text/javascript" src="<?php echo base_url('style/admin/js/admin.js')?>"></script>
<!-- 默认打开目标 -->
<base target="iframe"/>
</head>
<body>
<!-- 头部 -->
	<div id="top_box">
		<div id="top">
			<p id="top_font">图书管理系统后台 （V1.1）</p>
		</div>
		<div class="top_bar">
			<p class="adm">
				<span>管理员：</span>
				<span class="adm_pic">&nbsp&nbsp&nbsp&nbsp</span>
				<span class="adm_people">[<?php echo $this->session->userdata('username')?>]</span>
			</p>
			<p class="now_time">
				今天是：<?php echo date('Y.m.d')?>
				您的当前位置是：
				<span>首页</span>
			</p>
			<p class="out">
				<span class="out_bg">&nbsp&nbsp&nbsp&nbsp</span>&nbsp
				<a href="<?php echo site_url('admin/login/login_out')?>" target="_self">退出</a>
			</p>
		</div>
	</div>
<!-- 左侧菜单 -->
		<div id="left_box">
			<!-- <p class="use">功能管理</p> -->
			<div class="menu_box">
				<h2>业务管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/book/index')?>" class="pos">图书管理</a>
				        </li>
				    </ul>
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/category/index')?>" class="pos">分类管理</a>
				        </li>
				    </ul>
				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/borrow/index')?>" class="pos">借阅管理</a>
				        </li>
				    </ul>
				    <!-- <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/user/index')?>" class="pos">用户管理</a>
				        </li>
				    </ul> -->
				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/message/index')?>" class="pos">留言管理</a>
				        </li>
				    </ul>
				</div>
			</div>
			<div class="menu_box">
				<h2>系统管理</h2>
				<div class="text">
					<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('index/home')?>" class="pos" target="_blank">前台首页</a>
				        </li>
				    </ul>
				  	<ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/admin/copy')?>" class="pos">系统信息</a>
				        </li>
				    </ul>
				    <ul class="con">
				        <li class="nav_u">
				        	<a href="<?php echo site_url('admin/admin/change')?>" class="pos">密码修改</a>
				        </li>
				    </ul>
				</div>
			</div>
		</div>
		<!-- 右侧 -->
		<div id="right">
			<iframe  frameboder="0" border="0" 	scrolling="yes" name="iframe" src="<?php echo site_url('admin/admin/copy')?>"></iframe>
		</div>
	<!-- 底部 -->
	<div id="foot_box">
		<div class="foot">
			<p>@Copyright © 2015-2015 {$site} All Rights Reserved. 京ICP备0000000号</p>
		</div>
	</div>

</body>
</html>
<!--[if IE 6]>
    <script type="text/javascript" src="<?php echo base_url() . 'style/admin/'?>js/iepng.js"></script>
    <script type="text/javascript">
        DD_belatedPNG.fix('.adm_pic, #left_box .pos, .span_server, .span_people', 'background');
    </script>
<![endif]-->
