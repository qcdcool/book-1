<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/admin/css/public.css')?>">
	<title>Document</title>
	<style type="text/css">
		span{
			color: #f00;
		}
	</style>
</head>
<body>
	<form action="<?php echo site_url('admin/category/update')?>" method="POST">
	<table class="table">
		<tr>
			<td class="th" colspan="10">编辑栏目</td>
		</tr>
		<tr>
			<td>栏目名称</td>
			<td><input type="text" name="cname"  class="input" value="<?php echo $category[0]['cname']?>"/><?php echo form_error('cname', '<span>', '</span>')?></td>
		</tr>
		<tr>
			<input type="hidden" name="cid" value="<?php echo $category[0]['cid']?>"/>
			<td colspan="10"><input type="submit" value="编辑" class="input_button"/></td>
		</tr>
	</table>
	</form>
</body>
</html>