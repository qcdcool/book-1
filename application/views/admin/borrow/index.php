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

<a href="<?php echo site_url('admin/book/index')?>" onclick="return confirm('将为您跳转到图书管理页面, 请搜索要借阅的图书')"><input type="button" class="input_button" value="新增"/></a>

	<table class="table">
		<tr>
			<td>ID</td>
			<td>书名</td>
			<td>作者</td>
			<td>ISBN</td>
			<td>借阅人</td>
			<td>身份证号</td>
			<td>联系方式</td>
			<td>借书时间</td>
			<td>天数</td>
			<td>还书时间</td>
			<td>押金</td>
			<td>操作</td>
		</tr>

		<?php foreach ($borrow as $v): ?>
		<tr>
			<td><?php echo $v['id']?></td>
			<td><?php echo $v['title']?></td>
			<td><?php echo $v['author']?></td>
			<td><?php echo $v['isbn']?></td>
			<td><?php echo $v['name']?></td>
			<td><?php echo $v['idcard']?></td>
			<td><?php echo $v['phone']?></td>
			<td><?php echo date('Y-m-d H:i', $v['borrow_time'])?></td>
			<td><?php echo $v['borrow_days']?>天</td>
			<td><?php echo $v['returnDate']?></td>
			<td><?php echo $v['deposit']?></td>
			<td>
				[<a href="javascript:void(0)" onclick="renew(<?php echo $v['id']?>)">续借</a>]
				[<a href="<?php echo site_url('admin/borrow/delete/' . $v['id'] . '/asdf')?>" onclick="return returnBook(<?php echo $v['deposit']?>)">还书</a>]
			</td>
		</tr>
		<?php endforeach?>
	</table>
	<div class="page">
		<?php echo $links?>
	</div>
	<script>

	// 续借
	function renew(id)
	{
		days = prompt("要续借的天数(*需要输入一个大于0的整数)",1);
		if (days) {
			re = /^[1-9]+[0-9]*$/
			if(!re.test(days)) {
				alert('必须输入大于0的整数')
				return;
			} else{
				alert(days)
				window.location.href="<?php echo site_url('admin/borrow/update/"+id+"/"+days+"')?>"
			}
		}
	}

	function returnBook(deposit){
		if(confirm("确认还书, 并归还押金" + deposit + '?' )) {
			return true;
		} else {
			return false;
		}

	}
	</script>
</body>
</html>