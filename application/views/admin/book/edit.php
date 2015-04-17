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
	<form action="<?php echo site_url('admin/book/update')?>" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="bid" value="<?php echo $book['bid']?>">
	<table class="table">
		<tr >
			<td class="th" colspan="10">编辑图书</td>
		</tr>
		<tr>
			<td>标题</td>
			<td><input type="text" name="title"  class="input" value="<?php echo $book['title']?>"/>
			<?php echo form_error('title', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>作者</td>
			<td><input type="text" name="author"  class="input" value="<?php echo $book['author']?>"/>
			<?php echo form_error('author', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>出版社</td>
			<td><input type="text" name="press"  class="input" value="<?php echo $book['press']?>"/>
			<?php echo form_error('press', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>出版日期</td>
			<td><input type="text" name="date"  class="input" value="<?php echo $book['date']?>"/>
			<?php echo form_error('date', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>书号</td>
			<td><input type="text" name="isbn"  class="input" value="<?php echo $book['isbn']?>"/>
			<?php echo form_error('isbn', '<span>', '</span>')?>
			</td>
		</tr><tr>
			<td>库存量</td>
			<td><input type="text" name="stock"  class="input" value="<?php echo $book['stock']?>"/>
			<?php echo form_error('stock', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>租金</td>
			<td><input type="text" name="rent"  class="input" value="<?php echo $book['rent']?>"/>
			<?php echo form_error('rent', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>类型</td>
			<td>
			<?php if ($book['type'] == 1): ?>
				<input type="radio" name="type" value="1" checked="checked" /> 普通
				<input type="radio" name="type" value="2"/> 推荐
			<?php else: ?>
				<input type="radio" name="type" value="1"  /> 普通
				<input type="radio" name="type" value="2"checked="checked"/> 推荐
			<?php endif?>
			</td>
		</tr>
		<tr>
			<td>栏目</td>
			<td>
				<select name="cid" id="">
				<?php foreach ($category as $v): ?>
					<option value="<?php echo $v['cid']?>" <?php if ($book['cid'] == $v['cid']) {echo 'selected';}?>><?php echo $v['cname']?></option>
				<?php endforeach?>
				</select>
			</td>
		</tr>
		<tr>
			<td>缩略图</td>
			<td>
				<img src="<?php echo site_url('uploads/' . $book['thumb'])?>" alt="" width="300">
				<input type="file" name="thumb"/>
			</td>
		</tr>
		<tr>
			<td>摘要</td>
			<td>
				<textarea name="info" style="width:550px;height:160px"><?php echo $book['info']?></textarea>
				<?php echo form_error('info', '<span>', '</span>')?>
			</td>
		</tr>

		<tr>
			<td colspan="10"><input type="submit" class="input_button" value="保存"/></td>
		</tr>
	</table>
	</form>
</body>
</html>