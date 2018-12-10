<?php
/**
 * 이 파일은 서울대 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 서울대 포털 인덱스 게시판 최근게시물 위젯
 *
 * @file /module/snu/templets/widgets/board.recently/index.php
 * @author wioz ()
 * @license MIT License
 * @version 3.0.0.160910
 */
if (defined('__IM__') == false) exit;
?>
<ul>
	<?php foreach ($lists as $item) { ?>
	<li>
		<a href="<?php echo $item->link; ?>">
			<em><?php echo $item->title; ?></em>
			<span><?php echo GetTime('Y-m-d H:i:s',$item->reg_date); ?></span>
		</a>
	</li>
	<?php } ?>
</ul>
