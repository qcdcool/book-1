<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>图书管理系统</title>
<link href="<?php echo base_url() . 'style/index/'?>css/category.css" rel="stylesheet" />
<?php $this->load->view('index/head')?>
<div id="main">
		<div class='news'>

			<?php foreach ($book as $v): ?>
			<div class='newsList'>
				<div class='newsImage'>
					<a href="<?php echo site_url('b/' . $v['bid'])?>"><img src="<?php echo base_url() . 'uploads/' . $v['thumb']?>"/></a>
				</div>
				<div class='newsContent'>
					<h3><a href="<?php echo site_url('b/' . $v['bid'])?>"><?php echo $v['title']?></a></h3>
					<p><?php echo $v['info']?></p>
					<a href="<?php echo site_url('b/' . $v['bid'])?>" class='more'>更多>></a>
				</div>
			</div>
			<?php endforeach?>

		</div>
		<?php $this->load->view('index/right')?>
	</div>

		<?php $this->load->view('index/foot')?>
</body>
</html>