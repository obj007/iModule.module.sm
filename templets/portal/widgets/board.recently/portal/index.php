<ul>
	<?php foreach ($lists as $list) {  ?>
	<li><a href="<?php echo $list->link; ?>"><i></i><time data-time="<?php echo $list->reg_date; ?>" data-moment="fromNow"></time><?php echo $list->title; ?></a></li>
	<?php } ?>
</ul>

<div class="more"><a href="<?php echo $more; ?>"><i class="fa fa-caret-right"></i> 더보기</a></div>
