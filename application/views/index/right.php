		<div class='sidebar'>
			<div class='item'>
				<h2>图书标题</h2>
				<ul class='flink'>
					<?php foreach ($title as $v): ?>
					<li><a href="<?php echo site_url('b/' . $v['bid']) ?>"><?php echo $v['title'] ?></a></li>
					<?php endforeach ?>
				</ul>
			</div>
			
		</div>