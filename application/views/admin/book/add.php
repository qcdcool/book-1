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
	<form action="<?php echo site_url('admin/book/insert')?>" method="POST" enctype="multipart/form-data">
	<table class="table">
		<tr >
			<td class="th" colspan="10">添加图书</td>
		</tr>
		<tr>
			<td>书名</td>
			<td><input type="text" name="title" class="input" value="<?php echo set_value('title')?>"/>
			<?php echo form_error('title', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>作者</td>
			<td><input type="text" name="author"  class="input" value="<?php echo set_value('author')?>"/>
			<?php echo form_error('author', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>出版社</td>
			<td><input type="text" name="press"  class="input" value="<?php echo set_value('press')?>"/>
			<?php echo form_error('press', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>出版日期</td>
			<td><input type="text" name="date"  class="input" value="<?php echo set_value('date')?>"/>
			<?php echo form_error('date', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>书号</td>
			<td><input type="text" name="isbn"  class="input" value="<?php echo set_value('isbn')?>"/>
			<?php echo form_error('isbn', '<span>', '</span>')?>
			</td>
		</tr>

		<tr>
			<td>分类</td>
			<td>
				<select name="cid" id="" class＝"select">
					<?php foreach ($category as $v): ?>
					<option value="<?php echo $v['cid']?>"<?php echo set_select('cid', $v['cid'])?>><?php echo $v['cname']?></option>
					<?php endforeach?>
				</select>
			</td>
		</tr>
		<tr>
			<td>等级</td>
			<td>
				<input type="radio" name="type" value="1"<?php echo set_radio('type', '1', true)?>/> 普通
				<input type="radio" name="type" value="2"<?php echo set_radio('type', '2')?>/> 推荐
			</td>
		</tr>

		<tr>
			<td>库存</td>
			<td><input type="text" name="stock"  class="input" value="<?php echo set_value('stock')?>"/>
			<?php echo form_error('stock', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>租金</td>
			<td><input type="text" name="rent"  class="input" value="<?php echo set_value('rent')?>"/>
			<?php echo form_error('rent', '<span>', '</span>')?>
			</td>
		</tr>
		<tr>
			<td>缩略图</td>
			<td>
				<input type="file" name="thumb"/>
			</td>
		</tr>
		<tr>
			<td>摘要</td>
			<td>
				<textarea name="info" id="" class="textarea"  style="width:550px;height:160px;"><?php echo set_value('info')?></textarea>
			</td>
		</tr>

		<tr>
			<td colspan="10"><input type="submit" class="input_button" value="发布"/><a href="<?php echo site_url('admin/book')?>"><input type="button" class="input_button" value="取消"/></a></td>
		</tr>
	</table>
	</form>
</body>
</html>