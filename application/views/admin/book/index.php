<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('/style/admin/css/public.css')?>">
	<title>Document</title>
	<style type="text/css">
	.inline{
		display: inline;
	}
	</style>
</head>
<body>
<form action="<?php echo site_url('admin/book/search')?>" method="post" class="inline">
	 名称：<input type="text" name="title" class="input_short" value="<?php echo $title?>" />&nbsp;&nbsp;

	 栏目：<select name="cid" class="select"/>
	 <option value=""> 全部 </option>
	 <?php foreach ($category as $v): ?>
	 <option value="<?php echo $v['cid']?>" <?php if ($v['cid'] == $cid) {
    echo 'selected';
}
?>><?php echo $v['cname']?></option>
	 <?php endforeach?>
	 </select>

	 <input type="submit" class="input_button" value="查询"/>
</form>
<a href="<?php echo site_url('admin/book/add')?>"><input type="button" class="input_button" value="新增"/></a>
	<table class="table">
		<tr>
			<td>ID</td>
			<td>标题</td>
			<td>作者</td>
			<td>出版社</td>
			<td>书号(ISBN)</td>
			<td>栏目</td>
			<td>发表时间</td>
			<td>库存</td>
			<td>操作</td>
		</tr>

		<?php foreach ($book as $v): ?>
		<tr>
			<td><?php echo $v['bid']?></td>
			<td><?php echo $v['title']?></td>
			<td><?php echo $v['author']?></td>
			<td><?php echo $v['press']?></td>
			<td><?php echo $v['isbn']?></td>
			<td><?php echo $v['cname']?></td>
			<td><?php echo date('Y-m-d', $v['time'])?></td>
			<td><?php echo $v['stock']?>本</td>

			<td>
				[<a href="<?php echo site_url('admin/borrow/add/' . $v['bid'])?>">借阅</a>]
				[<a href="<?php echo site_url('admin/book/edit/' . $v['bid'])?>">编辑</a>]
				[<a href="<?php echo site_url('admin/book/delete/' . $v['bid'])?>">删除</a>]
			</td>
		</tr>
		<?php endforeach?>
	</table>
	<div class="page">
		<?php echo $links?>
	</div>
</body>
</html>