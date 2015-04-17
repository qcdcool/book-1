<!-- <link href="<?php echo base_url('style/common/css/semantic.min.css')?>" rel="stylesheet"> -->
<link rel="stylesheet" href="http://www.semantic-ui.cn/dist/semantic.min.css">
<link href="<?php echo base_url('style/index/css/common.css')?>" rel="stylesheet" />
</head>
<body>
	<div id="top">
	</div>
	<div id="header">
		<div class='logo'>
			<a href=""><img src="<?php echo base_url('style/index/images/logo.jpg')?>" alt=""></a>
		</div>
		<div class='navigation'>
		<form action="<?php echo site_url('index/home/search')?>" method="get">
<!-- <div class="ui small icon input">
			  <input type="text" placeholder="Search...">
			  <i class="search icon"></i>
			</div> -->
			<div class="search ui mini action input">
			  <input type="text" placeholder="请输入书籍名称..." name="keyword" value="<?php if (isset($_GET['keyword'])) {
    echo $_GET['keyword'];
}
?>" placeholder="搜索图书...">
			<button class="ui button">搜索</button>
			</div>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

			<a href="<?php echo site_url()?>">首页</a>
			<!-- <a href="<?php echo site_url()?>">借阅</a> -->
			<a href="<?php echo site_url('index/message/index')?>">留言板</a>
			<?php foreach ($category as $v): ?>
			<a href="<?php echo site_url('c/' . $v['cid'])?>"><?php echo $v['cname']?></a>
			<?php endforeach?>
			<!-- <div class="ui mini action  input search1">
			  <input type="text" placeholder="请输入书籍名称..." name="keyword" value="<?php if (isset($_GET['keyword'])) {
    echo $_GET['keyword'];
}
?>" placeholder="搜索图书...">
			<button class="ui button">搜索</button>
			</div> -->


          </form>
		</div>
	</div>