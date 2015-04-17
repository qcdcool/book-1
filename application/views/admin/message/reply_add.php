<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style/admin/css/public.css')?>">

	<title>Document</title>

</head>
<body>
	<form action="<?php echo site_url('admin/message/reply_insert')?>" method="POST" enctype="multipart/form-data">
	<input type="hidden" name="mid" value="<?php echo $message['mid']?>">
	<table class="table">
	<tr>
			<td>回复</td>
			<td>
				<div   style="color:#ccc; border:0; width:550px;"><?php echo $message['content']?></div>
			</td>
		</tr>
		<tr>
			<td>内容</td>
			<td>
				<textarea name="content" id="" class="textarea"  style="width:550px;height:160px;"></textarea>
			</td>
		</tr>

		<tr>
			<td colspan="10"><input type="submit" class="input_button" value="保存"/><a href="<?php echo site_url('admin/message')?>"><input type="button" class="input_button" value="取消"/></a></td>
		</tr>
	</table>
	</form>
</body>
</html>