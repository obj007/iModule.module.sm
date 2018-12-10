<?php
/**
 * 이 파일은 경기대 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 경기대 포털 메인페이지
 *
 * @file /kgu/templets/portal/externals/index.php
 * @author wioz ()
 * @license MIT License
 * @version 3.0.0.160910
 */

if (defined('__IM__') == false) exit;
$IM->addHeadResource('script',$IM->getDir().'/scripts/slick.min.js');
$IM->addHeadResource('style',$IM->getDir().'/styles/slick.min.css');
$IM->addHeadResource('style',$Templet->getDir().'/styles/index.css');
$IM->addHeadResource('script',$Templet->getDir().'/scripts/index.js');
?>

<main>
	<section class="visual">
		<div class="visual_img" style="background-image:url(/modules/kgu/templets/portal/images/main_visual<?php echo rand(1,1); ?>.png)"></div>
		<div class="container cnt">
			<div class="program">
					<?php $IM->getWidget('workshop.recently')->setTemplet('@index')->setValue('count',3)->doLayout(); ?>
				<aside class="login">
					<?php $IM->getWidget('member.login')->setTemplet('@index')->doLayout(); ?>
				</aside>
			</div>
		</div>
	</section>
	<!--section class="ctl">
		<div class="container">
			<?php //$IM->getWidget('workshop.recently')->setTemplet('@slide')->setValue('count',12)->doLayout(); ?>
		</div>
	</section-->
	<section class="info">
		<div class="container">
			<div class="wrap">
				<div class="menu">
					<div>
						<ul data-role="tab" data-name="program">
							<li data-tab="reviews" class="selected"><button type="button"><span>프로그램 리뷰<i class="fa fa-angle-right" aria-hidden="true"></i></span></button></li>
							<li data-tab="teaching"><button type="button"><span>교수프로그램<i class="fa fa-angle-right" aria-hidden="true"></i></span></button></li>
							<li data-tab="learning"><button type="button"><span>학생프로그램<i class="fa fa-angle-right" aria-hidden="true"></i></span></button></li>
							<li data-tab="ocw"><button type="button"><span>OCW<i class="fa fa-angle-right" aria-hidden="true"></i></span></button></li>
						</ul>
					</div>
				</div>

				<div data-role="tab" data-name="program" class="content">
					<div data-tab="reviews" class="review">
						<?php $IM->getWidget('board.recently')->setTemplet('@webzine')->setValue('title','')->setValue('type','post')->setValue('bid','ctl_review')->setValue('count',6)->doLayout(); ?>
					</div>
					<div data-tab="teaching" class="program">
						<div class="row box">
							<div class="col-sm-3 col-xs-6"><a href="<?php echo $IM->getUrl('teaching','workshop',false); ?>" class="teaching1">교수법 워크숍 <i class="fa fa-caret-right"></i></a></div>
							<div class="col-sm-3 col-xs-6"><a href="<?php echo $IM->getUrl('teaching','consulting',false); ?>" class="teaching2">Teaching Power up Consulting <i class="fa fa-caret-right"></i></a></div>
							<div class="col-sm-3 col-xs-6"><a href="<?php echo $IM->getUrl('teaching','ctd',false); ?>" class="teaching3">KGU CTD 연구모임 <i class="fa fa-caret-right"></i></a></div>
							<div class="col-sm-3 col-xs-6"><a href="<?php echo $IM->getUrl('teaching','luncheon',false); ?>" class="teaching4">런천특강 <i class="fa fa-caret-right"></i></a></div>
						</div>

						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<h4 class="sub_tit">프로그램 개설 현황</h4>

								<?php $IM->getWidget('workshop.recently')->setTemplet('@portal')->setValue('category',array(1,2,3,4,5))->setValue('count',4)->doLayout(); ?>
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="sub_tit">교수 공지사항</h4>

								<?php $IM->getWidget('board.recently')->setTemplet('@portal')->setValue('title','')->setValue('type','post')->setValue('bid','ctl_notice')->setValue('category',1)->setValue('count',4)->doLayout(); ?>
							</div>
						</div>
					</div>
					<div data-tab="learning" class="program">
						<div class="row box">
							<div class="col-sm-3 col-xs-6"><a href="<?php echo $IM->getUrl('learning','workshop',false); ?>" class="teaching1">학습법 워크숍 <i class="fa fa-caret-right"></i></a></div>
							<div class="col-sm-3 col-xs-6"><a href="<?php echo $IM->getUrl('learning','learningman',false); ?>" class="teaching2">러닝맨 퍼센트 업 <i class="fa fa-caret-right"></i></a></div>
							<div class="col-sm-3 col-xs-6"><a href="<?php echo $IM->getUrl('learning','type',false); ?>" class="teaching3">학습유형검사 <i class="fa fa-caret-right"></i></a></div>
							<div class="col-sm-3 col-xs-6"><a href="<?php echo $IM->getUrl('learning','with',false); ?>" class="teaching4">수업동행 <i class="fa fa-caret-right"></i></a></div>
						</div>

						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<h4 class="sub_tit">프로그램 개설 현황</h4>
								<?php $IM->getWidget('workshop.recently')->setTemplet('@portal')->setValue('category',array(6,7,8,9,10,11,12,13,14,15,16))->setValue('count',4)->doLayout(); ?>
							</div>

							<div class="col-sm-6 col-xs-12">
								<h4 class="sub_tit">학생 공지사항</h4>

<?php $IM->getWidget('board.recently')->setTemplet('@portal')->setValue('title','')->setValue('type','post')->setValue('bid','ctl_notice')->setValue('category',2)->setValue('count',4)->doLayout(); ?>
							</div>
						</div>
					</div>
					<div data-tab="ocw">
						<?php $ocw = $IM->getModule('kgu')->getOcwContents(8); //$ocw = array();?>
						<div class="row">
							<?php for ($i=0, $loop=count($ocw);$i<$loop;$i++) { ?>
							<div class="col-xs-6 col-sm-3">
								<a href="<?php echo $ocw[$i]['link'];?>" target="_blank">
									<div class="thumbnail" style="background-image:url(<?php echo $ocw[$i]['img']; ?>);"></div>

									<b><?php echo $ocw[$i]['title']; ?></b>
									<p><?php echo $ocw[$i]['writer']; ?></p>
								</a>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="notice">
		<div class="container">
			<div class="wrap">
				<div class="notice">
					<ul class="tab_bar" data-role="tab" data-name="notice">
						<li data-tab="notice"><button type="button">공지사항</button></li>
						<li data-tab="qna"><button type="button">Q&A</button></li>
						<li class="plus"><button type="button"><i class="mi mi-plus"></i></button></li>
					</ul>
					<div data-role="tab" data-name="notice" class="notice_cnt">
						<div data-tab="notice" class="notice">
							<?php $IM->getWidget('board.recently')->setTemplet('@index')->setValue('bid','ctl_notice')->setValue('type','post')->setValue('count',6)->setValue('title','')->doLayout(); ?>

						</div>
						<div data-tab="qna" class="qna">
							<?php $IM->getWidget('board.recently')->setTemplet('@index')->setValue('bid','ctl_qna')->setValue('type','post')->setValue('count',6)->setValue('title','')->doLayout(); ?>
						</div>
					</div>
				</div>
				<div class="link">
					<a href="<?php echo $IM->getUrl('learning','counsel',false); ?>" class="coach">
						<span>학습상담</span>
					</a>
					<a href="<?php echo $IM->getUrl('teaching','active',false); ?>" class="workshop">
						<span>Active Teaching</span>
					</a>
					<a href="<?php echo $IM->getUrl('elearning','contents',false); ?>" class="learn">
						<span>콘텐츠 제작지원</span>
					</a>
					<a href="<?php echo $IM->getUrl('learning','barun',false); ?>" class="teach">
						<span>BARUN 프로젝트</span>
					</a>
				</div>
			</div>
		</div>
	</section>
	<div class="sns" style="padding:80px 0px; background:#e5e5e5;">
		<div class="container">
			<?php $IM->getWidget('socialstream')->setTemplet('@portal')->setValue('facebook','kyonggiuniv1,kyonggibarunambassador')->setValue('facebook_app_id','1100310590000349')->setValue('facebook_app_secret','b4963cf3e7f29615fc7e45b7d346f296')->setValue('count',8)->doLayout(); ?>
		</div>
	</div>
</main>
