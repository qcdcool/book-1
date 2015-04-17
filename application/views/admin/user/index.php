<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/admin/css/public.css'?>">
	<title>Document</title>
</head>
<body>
	<table class="table">

		<tr>
			<td>UID</td>
			<td>用户名称</td>
			<td>性别</td>
			<td>年龄</td>
			<td>地址</td>
			<td>操作</td>
		</tr>

		<?php foreach ($user as $v): ?>
		<tr>
			<td><?php echo $v['uid']?></td>
			<td><?php echo $v['username']?></td>
			<td><?php echo $v['gender']?></td>
			<td><?php echo $v['age']?></td>
			<td><?php echo $v['address']?></td>
			<td>
				[<a href="<?php echo site_url('admin/user/delete/' . $v['uid'])?>">删除</a>]
			</td>
		</tr>
		<?php endforeach?>
	</table>
</body>
</html>