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

$program_tab = array();
$program_tab['professor'] = array();
$program_tab['student'] = array();
$program_tab['learn'] = array();
foreach ($lists as $item) { 

	$tmp_one = '<div>';
	$tmp_one .= '<span>';
	if ($item->is_open == true) {
		$tmp_one .= '<i class="register">접수중</i>';
	} elseif ($item->is_wait == true) {
		$tmp_one .= '<i class="due">예정</i>';
	} else {
		$tmp_one .= '<i class="deadline">마감</i>';
	}
	$tmp_one .= '</span>';

	$tmp_one .= '<a href="'.$item->link.'">';
	$tmp_one .= '<em>'.$item->title.'</em>';
	$tmp_one .= '<span>'.GetTime('Y-m-d(D) H:i',$item->start_date).' ~ '.GetTime('Y-m-d(D) H:i',$item->end_date).'</span>';
	$tmp_one .= '</a>';
	$tmp_one .= '</div>';

	if ($item->department == "교수지원") {
		$program_tab['professor'][] = $tmp_one;
	} else if ($item->department == "학습지원") {
		$program_tab['student'][] = $tmp_one;
	}
}

$ary_sel = array();
$ary_sel['tab_professor'] = "";
$ary_sel['div_professor'] = "";
$ary_sel['tab_student'] = "";
$ary_sel['div_student'] = "";
$ary_sel['tab_learn'] = "";
$ary_sel['div_learn'] = "";
if ($IM->getModule('member')->getMemberLabel(null,2) == true || $IM->getModule('member')->getMemberLabel(null,3) == true) {
	$ary_sel['tab_student'] = "selected";
	$ary_sel['div_student'] = "on";
} else {
	$ary_sel['tab_professor'] = "selected";
	$ary_sel['div_professor'] = "on";
}

?>

<strong>
	<span>프로그램 개설 현황</span>
	<ul class="program_tab">
		<li data-role="professor" class="<?php echo $ary_sel['tab_professor']?>">교수</li>
		<li data-role="student" class="<?php echo $ary_sel['tab_student']?>">학생</li>
		<li data-role="learn" class="<?php echo $ary_sel['tab_learn']?>">이러닝</li>
	</ul>
</strong>

<?php 
foreach ($program_tab as $key => $tab) {
	echo '<div class=" obj_widgets_workshop_top '.$ary_sel['div_'.$key].' " data-role="'.$key.'"  >';
	foreach ($tab as $value) {
		echo $value;
	}
	echo '</div>';
}
?>
