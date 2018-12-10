<?php
/**
 * 이 파일은 서울대 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 경기대 포털 인덱스 위크숍 최근게시물 위젯
 *
 * @file /module/snu/templets/widgets/workshop.recently/index.php
 * @author wioz ()
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 8. 19.
 */
if (defined('__IM__') == false) exit;
?>

<ul>


<?php foreach ($lists as $item) { ?>
<li>
	<a href="<?php echo $item->link; ?>">
		<?php if ($item->is_open == true) { ?>
		<i class="open">접수중</i>
		<?php } elseif ($item->is_wait == true) { ?>
		<i>예정</i>
		<?php } else { ?>
		<i class="close">마감</i>
		<?php } ?>
		<?php echo $item->title; ?>
		<!--span><?php //echo GetTime('Y-m-d(D) H:i',$item->start_date); ?> ~ <?php //echo GetTime('Y-m-d(D) H:i',$item->end_date); ?></span-->
	</a>
</li>
<?php } ?>
</ul>
