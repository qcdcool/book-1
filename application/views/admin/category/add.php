<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/admin/css/public.css'?>">
	<title>Document</title>
	<style type="text/css">
		span{
			color: #f00;
		}
	</style>
</head>
<body>
	<form action="<?php echo site_url('admin/category/insert')?>" method="POST">
	<table class="table">
		<tr>
			<td class="th" colspan="10">添加栏目</td>
		</tr>
		<tr>
			<td>栏目名称</td>
			<td><input type="text" name="cname" class="input"  value="<?php echo set_value('cname')?>"/><?php echo form_error('cname', '<span>', '</span>')?></td>
		</tr>
		<tr>
			<td colspan="10"><input type="submit" value="添加" class="input_button"/><a href="<?php echo site_url('admin/category')?>"><input type="button" class="input_button" value="取消"/></a></td>
		</tr>
	</table>
	</form>
</body>
</html>