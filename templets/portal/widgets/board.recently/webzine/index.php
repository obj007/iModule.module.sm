<ul>
	<?php $looper = 0; foreach ($lists as $data) { ?>
	<li class="item-<?php echo ++$looper; ?>">
		<div>
			<div class="item"<?php echo $data->image != null ? ' data-cover="TRUE" style="background-image:url('.$data->image->path.');"' : 'data-cover="FALSE"'; ?>>
				<a href="<?php echo $data->link; ?>" class="box">
					<label><?php echo $data->category->title; ?></label>

					<h4><?php echo $data->title; ?></h4>
					<time data-moment="YYYY-MM-DD" data-time="<?php echo $data->reg_date; ?>"></time>
				</a>
			</div>
		</div>
	</li>
	<?php } ?>
</ul>
<?php
if ($looper == 0) {
?>
<div class="no_content" >
	<span>
		<img src="/modules/kgu/templets/portal/images/no_content.png" alt="">
		등록된 글이 존재하지 않습니다.
	</span>
</div>
<?php } ?>