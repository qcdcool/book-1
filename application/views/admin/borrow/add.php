<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/admin/css/public.css')?>">
	<script src="<?php echo base_url('style/admin/js/jquery.min.js')?>"></script>
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
	<form action="<?php echo site_url('admin/borrow/insert')?>" method="POST" id="form" enctype="multipart/form-data">
		<input type="hidden" name="bid" value="<?php echo $book['bid']?>">
		<table class="table">
			<tr >
				<td class="th" colspan="10">请填写借阅信息</td>
			</tr>
			<tr>
				<td>真实姓名</td>
				<td><input type="text" name="name" id="name" class="input" value="" required="required"/>
				</td>
			</tr>
			<tr>
				<td>身份证号</td>
				<td><input type="text" name="idcard" id="idcard" class="input" value="" required="required"/>
				</td>
			</tr>
			<tr>
				<td>手机号</td>
				<td><input type="text" name="phone" id="phone" class="input" value="" required="required"/>
				</td>
			</tr>
			<tr>
				<td>借阅天数</td>
				<td><input type="text" name="borrow_days" id="borrow_days"  class="input" value="14" required="required"/>(*单位:天, 默认两周)
				</td>
			</tr>
			<tr>
				<td>押金</td>
				<td><input type="text" name="deposit" id="deposit"  class="input" value="100" required="required"/>(*单位:元)
				</td>
			</tr>

			<tr>
				<td colspan="10"><input type="button" class="input_button" value="保存" onclick="checkForm()" /><a href="<?php echo site_url('admin/borrow')?>"><input type="button" class="input_button" value="取消"/></a></td>
			</tr>
		</table>

		</form>
		<script>
			function checkForm()
			{
				idcardRule = /^(\d{15}$|^\d{18}$|^\d{17}(\d|X|x))$/;
				if (!idcardRule.test($('#idcard').val())) {
					alert('身份证格式不对')
					return;
				}

				phoneRule = /^(13[0-9]|15[0|3|6|7|8|9]|18[8|9])\d{8}$/;
				if (!phoneRule.test($('#phone').val())) {
					alert('手机号格式不对')
					return;
				}

				borrow_daysRule = /^\d{1,3}$/;
				if (!borrow_daysRule.test($('#borrow_days').val())) {
					alert('借阅天数格式不对')
					return;
				}

				depositRule = /^\d{1,3}$/;
				if (!depositRule.test($('#deposit').val())) {
					alert('押金格式不对')
					return;
				}
				
				$('#form').submit()
			}
		</script>
</body>
</html>