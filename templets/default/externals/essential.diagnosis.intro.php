<?php
/**
 * 이 파일은 iModule 경기대 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 경기대 핵심역량 진단시작 페이지 상단에 나타날 내용
 *
 * @file /modules/kgu/templets/portal/externals/essential.diagnosis.start.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2017. 12. 4.
 */
$IM->addHeadResource('style',$Templet->getDir().'/styles/diagnosis.css');

/**
 * $form->idx 의 번호는 im_essential_diagnosis_form_table 의 idx 값
 * 해당 값으로 어떤 진단인지 알 수 있다.
 */
//if ($form->idx == 1) {
?>
<!--div class="start">
	<h4>핵심역량(core competence) 정의</h4>
	<div class="diagram">
		<img src="<?php echo $Templet->getDir(); ?>/images/essential/essential_index_1.png">
	</div>

	<div class="text">
		단순히 지식이나 기술만을 의미하는 것이 아니라 태도와 감정, 가치, 동기 등과 같은 사회적, 행동적 요소를 포함한 다양한  삶의 맥락에 걸처 모든 개인이 공통적으로 필요로 하는 것으로, 대학생의 핵심역량은 성공적인 대학생, 성인으로서 사회인, 미래 전문 직업인으로 살기 위해 갖추어야 하는 능력입니다.<br>
		현대사회가 대학생에게 요구하는 기본 역량과 본교 교육의 지향점을 고려하여 필수적으로 요구되는 창의역량, 융합역량, 공동체역량, 의사소통역량, 리더십역량, 글로벌역량으로 &lt;경기 6대 핵심역량&gt;을 정의하였습니다.<br>
	</div>

	<h4>핵심역량 진단의 목적</h4>
	<div class="text">
		학생 개인 핵심능력 및 역량 정도를 진단하여 학생에게는 역량강화 및 진로개발을 지원하고, 대학은 역량기반 교육과정 및 교육 프로그램과 연계하여 보다 질높은 교육과정을 제공하고자 합니다.
	</div>

	<h4>핵심역량 진단  절차</h4>
	<div class="diagram">
		<img src="<?php echo $Templet->getDir(); ?>/images/essential/essential_index_2.png">
	</div>
</div-->
<?php //} elseif ($form->idx == 2) { // 교수 STAR 역량 진단 ?>
<!--div class="start star">
	<h4>교수역량 진단 절차</h4>
	<div class="diagram">
		<img src="<?php echo $Templet->getDir(); ?>/images/essential/essential_index_3.png">
	</div>

	<h4>STAR 교수역량 연계</h4>
	<div class="diagram">
		<img src="<?php echo $Templet->getDir(); ?>/images/essential/essential_index_4.png">
	</div>

	<h4>STAR 교수역량 진단안내</h4>
	<div class="diagram">
		<img src="<?php echo $Templet->getDir(); ?>/images/essential/essential_index_5.png">
	</div>
	<div class="diagram_full">
		<img src="<?php echo $Templet->getDir(); ?>/images/essential/essential_index_6.png">
	</div>
</div-->
<?php //} ?>

<div class="essential_cnt">
	<h4>핵심역량(core competence) 정의</h4>
	<div class="gray_box">
		<img src="<?php echo $Templet->getDir(); ?>/images/essential_index_1.png" alt="">
	</div>

	<h4>경기대학교 BARUN핵심역량이란?</h4>
	<div class="text">
		전문지식과 실무능력을 겸비한 창조적 ‘전문인’, 올바른 인성을 갖추고 자기계발에 정진하는 ‘교양인’, 인류사회의 평화와 발전을 선도하는 ‘세계인’, 공동체의 번영과 행복에 기여하는 ‘봉사인’으로 살기 위해 갖추어야 하는 능력입니다. <br />
		진(眞)·성(誠)·애(愛)를 바탕으로 자율적 인격을 갖추고, 국가와 인류사회 발전에 기여하는 인재로서 필수적으로 요구되는 5가지 역량으로 &lt;BARUN핵심역량&gt;을 정의하였습니다.
	</div>
	
	<div class="table_box">
		<table class="tb_list">
			<thead>
				<tr>
					<th>BARUN 핵심역량</th>
					<th>역량정의</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><b>창의융합역량</b><br>(Boundless)</td>
					<td>창의적으로 사고하고 학제 간 융･복합할 수 있는 역량</td>
				</tr>
				<tr>
					<td><b>전문역량</b><br>(Able)</td>
					<td>전문지식을 습득하기 위한 기초학업능력</td>
				</tr>
				<tr>
					<td><b>시민의식</b><br>(Reliable)</td>
					<td>바른 인성과 도덕성을 토대로 공동체에 봉사하는 성숙한 시민의식</td>
				</tr>
				<tr>
					<td><b>소통역량</b><br>(Understanding)</td>
					<td>타인의 입장과 상황을 고려하여 효과적으로 소통할 수 있는 역량</td>
				</tr>
				<tr>
					<td><b>협업역량</b><br>(Network)</td>
					<td>과업달성을 위한 자기계발 능력과 협업 능력</td>
				</tr>
			</tbody>
		</table>
	</div>

	
	<!--div class="table_box">
		<table>
			<colgroup><col width="90"/><col width="90"/><col width=""/></colgroup>
			<thead>
				<tr>
					<th scope="col">BARUN<br />역량</th>
					<th scope="col">세부 역량</th>
					<th scope="col">역량 정의</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td colspan="2" class="pt_color1">[B] 창의융합역량</td>
					<td class="a_l">창의적으로 사고하고 학제 간 융·복합할 수 있는 역량</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>문제해결</td>
					<td class="a_l">주어진 문제를 명확히 파악하고, 다양한 자료를 수집, 분석, 종합하여 체계적인 해결책을 제시할 수 있는 능력</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>창의적사고</td>
					<td class="a_l">주변 세계에 대한 관심과 관찰에 기초하여 혁신적 관점에서 문제에 접근하고 전인미답의 새로운 것을 제시할 수 있는 능력</td>
				</tr>
				<tr>
					<td colspan="2" class="pt_color2">[A] 전문 역량</td>
					<td class="a_l">전문지식을 습득하기 위한 기초학업능력</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>전문지식</td>
					<td class="a_l">해당 분야에 대한 최첨단 전문지식을 수용･습득･이해하고 활용할 수 있는 능력</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>자기계발</td>
					<td class="a_l">자기관리, 학습 및 업무 기술의 향상을 위해 지속적・주도적으로 학습・계발할 수 있는 능력</td>
				</tr>
				<tr>
					<td colspan="2" class="pt_color3">[R] 시민 의식</td>
					<td class="a_l">바른 인성과 도덕성을 토대로 공동체에 봉사하는 성숙한 시민의식</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>책임의식</td>
					<td class="a_l">타인에 대한 배려와 관심에 바탕을 두고 개인행동 및 대인관계에서 규범적으로 적절하게 행동할 수 있는 능력</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>사회배려</td>
					<td class="a_l">공동체의 구성원을 도와주거나 보살피는 마음을 실행하는 능력</td>
				</tr>
				<tr>
					<td colspan="2" class="pt_color4">[U] 소통 역량</td>
					<td class="a_l">타인의 입장과 상황을 고려하여 효과적으로 소통할 수 있는 역량</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>의사소통</td>
					<td class="a_l">자신의 생각과 의견을 명확하고 효과적으로 전달하고 타인의 생각과 의견을 명확하게 이해할 수 있는 능력</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>세계화</td>
					<td class="a_l">긍정적이고 적극적인 자세로 세계 문화를 이해하고 국제적으로 소통할 수 있는 능력</td>
				</tr>
				<tr>
					<td colspan="2" class="pt_color5">[N] 협업 역량</td>
					<td class="a_l">과업달성을 위한 자기계발 능력과 협업 능력</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>리더십</td>
					<td class="a_l">공동체의 성격과 상황을 고려하여 목표에 달성할 수 있도록 효율적이고 생산적으로 공동체를 이끌 수 있는 능력</td>
				</tr>
				<tr class="bg_gray">
					<td></td>
					<td>팀워크</td>
					<td class="a_l">팀의 구성원으로서 자신의 역할에 책임을 다하고 협력적으로 행동하는 능력</td>
				</tr>
			</tbody>
		</table>
	</div-->
	<br /><br />
		<br />
	<div style="text-align:center;margin-top:30px;"><a href="/ko/competency/index/start"><img src="/modules/kgu/templets/default/images/essential/btn_basic01.png" /></a></div>	 
</div>
