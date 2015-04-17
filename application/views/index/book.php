<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>图书管理系统</title>
<link href="<?php echo base_url() . 'style/index/'?>css/category.css" rel="stylesheet" />
<?php $this->load->view('index/head')?>
<div id="main">
		<div class='news'>
			<style>
				p{
					margin:13px;
				}
			</style>
			<div class='newsList'>
				<div class='newsImage' style="width:268px;height:auto;">
					<img src="<?php echo base_url() . 'uploads/' . $book[0]['thumb']?>"/>
				</div>
				<div class='newsContent' style="width:380px;">
					<p>图书名:　<?php echo $book[0]['title']?></p>
					<p>作　者:　<?php echo $book[0]['author']?></p>
					<p>出版社:　<?php echo $book[0]['press']?></p>
					<p>类　别:　<?php echo $book[0]['cname']?></p>
					<p>出版日期:　<?php echo $book[0]['date']?></p>
					<p>ISBN:　<?php echo $book[0]['isbn']?></p>
					<p>简　介:　<?php echo $book[0]['info']?></p>
				</div>
			</div>


		</div>
		<?php $this->load->view('index/right')?>
	</div>

		<?php $this->load->view('index/foot')?>
</body>
</html>