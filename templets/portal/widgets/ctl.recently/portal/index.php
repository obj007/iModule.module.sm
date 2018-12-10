<ul>
	<li><a href=""><i class="open">접수중</i>ㄷㄱㅎㄷㄱㅎㅎ</a></li>
	<?php foreach ($lists as $list) {  ?>
	<li><a href="<?php echo $list->link; ?>"><i class="<?php echo $list->status == 'OPEN' ? 'open' : 'close'; ?>"><?php echo $list->status == 'OPEN' ? '접수중' : '마감'; ?></i><?php echo $list->title; ?></a></li>
	<?php } ?>
</ul>
