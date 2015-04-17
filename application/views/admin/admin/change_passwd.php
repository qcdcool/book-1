<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/admin/css/public.css'?>">
	<title>Document</title>
</head>
<body>
	<form action="<?php echo site_url('admin/admin/change_passwd')?>" method="POST">
	<table class="table">
		<tr>
			<td class="th" colspan="10">修改密码</td>
		</tr>
		<tr>
			<td>用户</td>
			<td><?php echo $this->session->userdata('username')?></td>
		</tr>
		<tr>
			<td>原始密码</td>
			<td><input type="password" name="passwd" class="input" /></td>
		</tr>
		<tr>
			<td>新密码</td>
			<td><input type="password" name="passwdF" class="input" /></td>
		</tr>
		<tr>
			<td>确认密码</td>
			<td><input type="password" name="passwdS" class="input" /></td>
		</tr>
		<tr>
			<td colspan="10">
				<input type="submit" class="input_button" value="修改" />
			</td>
		</tr>
	</table>
	</form>
</body>
</html>