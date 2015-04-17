<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>图书管理系统</title>
<link href="<?php echo base_url() . 'style/index/'?>css/category.css" rel="stylesheet" />
<?php $this->load->view('index/head')?>
<div id="main">

	<div class='news'>
		<div>
			<form action="<?php echo site_url('index/message/insert')?>" method="post">
				<textarea name="content" id="" cols="100" rows="10" placeholder="输入评论内容"></textarea>
				<div style="margin-top:10px">
					<input type="submit" value="发表评论">
				</div>
			</form>
		</div>

		<?php foreach ($message as $v): ?>
		<div class='newsList'>
			<div class='newsContent' style="width:100%">
				<span><?php echo ' ' . date('Y-m-d H:i', $v['time'])?></span>
				<h3><?php echo $v['content']?></h3>
			</div>
		</div>
		<?php endforeach?>

	</div>
	<?php $this->load->view('index/right')?>
</div>

<?php $this->load->view('index/foot')?>
</body>
</html>