<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/admin/css/public.css'?>">
	<title>Document</title>
</head>
<body>
<a href="<?php echo site_url('admin/category/add')?>"><input type="button" class="input_button" value="新增"/></a>
	<table class="table">

		<tr>
			<td>CID</td>
			<td>栏目名称</td>
			<td>操作</td>
		</tr>

		<?php foreach ($category as $v): ?>
		<tr>
			<td><?php echo $v['cid']?></td>
			<td><?php echo $v['cname']?></td>
			<td>
				[<a href="<?php echo site_url('admin/category/edit/' . $v['cid'])?>">编辑</a>]

				[<a href="<?php echo site_url('admin/category/delete/' . $v['cid'])?>">删除</a>]
			</td>
		</tr>
		<?php endforeach?>
	</table>
</body>
</html>