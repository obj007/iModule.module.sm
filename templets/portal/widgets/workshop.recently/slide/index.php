<?php
/**
 * 이 파일은 서울대 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 서울대 포털 인덱스 워크숍 스케쥴 위젯
 *
 * @file /module/snu/templets/widgets/workshop.schedule/index.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 8. 19.
 */
if (defined('__IM__') == false) exit;

?>

<h4>
	교수학습원 프로그램
	<div class="ctl-dots"></div>
</h4>

<div data-role="list" data-type="I">
	<i class="indicator"><div><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i></div></i>
	<button data-action="left"><i class="fa fa-angle-left"></i></button>
	<div class="ctl-slide">
<?php if (count($lists) == 0) { ?>
	<span>등록된 프로그램이 없습니다.</span>
<?php } else { ?>
		<ul>
			<?php 
			foreach ($lists as $item) {
				
				$link_department = "learning";
				if($item->department=="고수지원") {
					$link_department = "teaching";
				}
				$item->dday = floor(($item->signin_end_date - time()) / 60 / 60 / 24);

				if ($item->signin_limit == 0) {
					$total = $item->signin_end_date - $item->signin_start_date;
					$progress = time() - $item->signin_start_date;
					$progress = $progress < 0 ? 0 : ($progress > $total ? $total : $progress);
					$item->progress = sprintf('%0.2f',$progress/$total * 100);
				} else {
					$item->progress = sprintf('%0.2f',$item->applicant/$item->signin_limit * 100);
				}
				$category = $me->getCategory($item->category);

 			?>
				<li>

					<div data-role="item">
						<div class="cover" style="background-image:url(/modules/kgu/templets/portal/images/temp_ctl1.png);">
							<a href="<?php echo $item->link; ?>" target="_blank"></a>
							<label class="step1">
								<span class="dday"><?php echo $item->dday <= -1 ? '마감' : 'D-'.$item->dday; ?></span>
							</label>
						</div>
						<div class="content">
							<b><a href="<?php echo $item->link; ?>" target="_blank"><?php echo $item->title;?></a></b>
							<label>
								<span class="category"><?php echo $category->title?></span>
								<span class="department"><a href="/ko/<?php echo $link_department;?>" ><?php echo $item->department;?></a></span>
							</label>
							<div class="schedule">
								<?php echo GetTime('Y-m-d(D)',$item->start_date); ?> ~ <?php echo GetTime('Y-m-d(D)',$item->end_date); ?>
							</div>
							<div class="signin">
								접수 : <?php echo GetTime('Y-m-d(D)',$item->signin_start_date); ?> ~ <?php echo GetTime('Y-m-d(D)',$item->signin_end_date); ?>
							</div>
							<!-- <div class="tags">
								<a href="http://eco.kgu.examples.kr/ko/search/tag/공모전">#공모전</a>
								<a href="http://eco.kgu.examples.kr/ko/search/tag/수업에세이">#수업에세이</a>
							</div> -->
							<div class="progress">
								<div style="width:<?php echo $item->progress; ?>%;"></div>
							</div>
							<div class="status">
								<i class="xi <?php echo $item->signin_type == 'INDIVIDUAL' ? 'xi-user' : 'xi-users'; ?>"></i>
								<span><?php echo $item->signin_type == 'INDIVIDUAL' ? '개인' : '팀'; ?></span>
								<span class="applicant"><b><?php echo $item->applicant;?></b>/<?php echo $item->signin_limit == 0 ? '무제한' : $item->signin_limit.($item->signin_type == 'INDIVIDUAL' ? '명' : '팀'); ?></span>
							</div>
						</div>
					</div>
				</li>
			<?php } ?>
		</ul>
<?php } ?>


	</div>
	<button data-action="right"><i class="fa fa-angle-right"></i></button>
</div>


