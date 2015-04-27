<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . '/style/admin/css/public.css'?>">
	<script type="text/javascript" src="<?php echo base_url('style/admin/js/jquery.min.js')?>">

	</script>
	<title>Document</title>
</head>
<body>
	<table class="table">

		<tr>
			<td>MID</td>
			<td width="70%">内容</td>
			<td>时间</td>
			<td>操作</td>
		</tr>

		<?php foreach ($message as $v): ?>
		<tr>
			<td><?php echo $v['mid']?></td>
			<!-- <td><?php echo $v['username']?></td> -->
			<td><?php echo $v['content']?></td>
			<td><?php echo date('Y-m-d H:i', $v['time'])?></td>
			<td>
				<a href="<?php echo site_url('admin/message/reply_add/' . $v['mid'])?>">回复</a>
				<a href="javascript:void(0)" onclick="del('<?php echo site_url("admin/message/delete/$v[mid]")?>')">删除</a>
			</td>
		</tr>
		<?php endforeach?>
	</table>
	<script type="text/javascript">
		function del(url) {
			$.ajax({
				url:url,
				success:function(data) {
					alert(data)
					window.location.reload();
				}
			})
		}
	</script>
</body>
</html>
