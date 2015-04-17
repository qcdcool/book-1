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

	<table class="table">
		<tr >
			<td class="th" colspan="10">请确认图书信息(*不可修改)</td>
		</tr>
		<tr>
			<td>名称</td>
			<td><input type="text" name="title"  class="input" value="<?php echo $book['title']?>" readonly/>
			</td>
		</tr>
		<tr>
			<td>作者</td>
			<td><input type="text" name="author"  class="input" value="<?php echo $book['author']?>" readonly/>
			</td>
		</tr>
		<tr>
			<td>书号</td>
			<td><input type="text" name="isbn"  class="input" value="<?php echo $book['isbn']?>" readonly/>
			</td>
		</tr>
		<tr>
			<td>库存量</td>
			<td><input type="text" name="stock"  class="input" value="<?php echo $book['stock']?>" readonly/>
			</td>
		</tr>

		<tr>
			<td>缩略图</td>
			<td>
				<img src="<?php echo site_url('uploads/' . $book['thumb'])?>" width="300" alt="">
			</td>
		</tr>
	</table>
	<form action="<?php echo site_url('admin/borrow/insert')?>" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="bid" value="<?php echo $book['bid']?>">
		<table class="table">
			<tr >
				<td class="th" colspan="10">请填写借阅信息</td>
			</tr>
			<tr>
				<td>真实姓名</td>
				<td><input type="text" name="name"  class="input" value="" required="required"/>
				</td>
			</tr>
			<tr>
				<td>身份证号</td>
				<td><input type="text" name="idcard"  class="input" value="" required="required"/>
				</td>
			</tr>
			<tr>
				<td>手机号</td>
				<td><input type="text" name="phone"  class="input" value="" required="required"/>
				</td>
			</tr>
			<tr>
				<td>借阅天数</td>
				<td><input type="text" name="borrow_days"  class="input" value="14" required="required"/>(*单位:天, 默认两周)
				</td>
			</tr>
			<tr>
				<td>押金</td>
				<td><input type="text" name="deposit"  class="input" value="100" required="required"/>(*单位:元)
				</td>
			</tr>

			<tr>
				<td colspan="10"><input type="submit" class="input_button" value="保存"/><a href="<?php echo site_url('admin/borrow')?>"><input type="button" class="input_button" value="取消"/></a></td>
			</tr>
		</table>

		</form>
</body>
</html>