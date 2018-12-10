<?php
/**
 * 이 파일은 경기대 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 경기대 포털 서브페이지
 *
 * @file /templets/ysu/layouts/subpage.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0.160910
 */
if (defined('__IM__') == false) exit;

$IM->addHeadResource('style',$Templet->getDir().'/styles/subpage.css');
$IM->addHeadResource('script',$Templet->getDir().'/scripts/subpage.js');
?>


<div class="sticky_bar">
	<div class="container">
		<h1 class="logo"><a href=""></a></h1>
		<h3>
			<span><?php echo $IM->getPage()->title; ?></span>

			<div class="nbreadcrumb">
				<a href="<?php echo $IM->getIndexUrl(); ?>" class="home" ><i class="fa fa-home"></i></a>

				<div data-role="input" >
					<span><?php echo $IM->getMenus($IM->menu)->title; ?></span>
				</div>
				<div data-role="input">
					<select name="page">
						<?php foreach ($IM->getPages($IM->menu) as $item) { ?>
						<option value="<?php echo $IM->getUrl($item->menu,$item->page,false); ?>"<?php echo $item->menu == $IM->menu && $item->page == $IM->page ? ' selected="selected"' : ''; ?>><?php echo $item->title; ?></option>
						<?php } ?>
					</select>
				</div>
			</div>
		</h3>
	</div>
</div>
<main class="subpage">

	<div class="intro page_<?php echo $IM->getMenus($IM->menu)->menu ?>" style="background-image:url(<?php echo $Templet->getDir(); ?>/images/main_visual<?php echo rand(1,1); ?>.png)">
		<p><?php echo $IM->getMenus($IM->menu)->title; ?></p>
	</div>

	<div class="container">
		<div class="context">
			<nav>
				<h2><?php echo $IM->getMenus($IM->menu)->title; ?></h2>

				<ul>

					<?php foreach ($IM->getPages($IM->menu) as $item) {  if ($item->is_hide == true) continue;  ?>
					<li<?php echo $IM->page == $item->page ? ' class="selected"' : ''; ?>>
						<a href="<?php echo $IM->getUrl($item->menu,$item->page,false); ?>">
							<?php echo $item->title; ?>
						</a>
					</li>
					<?php } ?>
				</ul>
			</nav>

			<section>
				<h3>
					<?php echo $IM->getPage()->title; ?>

					<div class="nbreadcrumb">
						<a href="<?php echo $IM->getIndexUrl(); ?>" class="home" ><i class="fa fa-home"></i></a>

						<div data-role="input" >
							<span><?php echo $IM->getMenus($IM->menu)->title; ?></span>
						</div>
						<div data-role="input">
							<select name="page">
								<?php foreach ($IM->getPages($IM->menu) as $item) { ?>
								<option value="<?php echo $IM->getUrl($item->menu,$item->page,false); ?>"<?php echo $item->menu == $IM->menu && $item->page == $IM->page ? ' selected="selected"' : ''; ?>><?php echo $item->title; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>

				</h3>
				<?php echo $context; ?>

				<!--div class="page_poll">
					<div class="poll_box">
						<strong>이 페이지에서 제공하는 정보와 사용편의성에 만족하십니까?</strong>
						<div class="radio_wrap">
							<label><input type="radio" name="poll"/><span>매우만족</span></label>
							<label><input type="radio" name="poll"/><span>만족</span></label>
							<label><input type="radio" name="poll"/><span>보통</span></label>
							<label><input type="radio" name="poll"/><span>불만족</span></label>
							<label><input type="radio" name="poll"/><span>매우불만족</span></label>
						</div>
						<div class="poll_btn">
							<button type="button" class="eval">평가하기</button>
							<button type="button" class="regist">의견등록</button>
						</div>
					</div>
					<dl class="info">
						<dt><i class="xi xi-user-circle"></i> 담당자정보</dt>
						<dd>
							<span>담당부서 : 단과대학</span>
							<i>|</i>
							<span>최종수정일 : 2017. 09. 18</span>
						</dd>
						<dd class="btn">
							<a href="">문의사항 <i class="fa fa-angle-right"></i></a>
							<a href="">홈페이지 오류신고 <i class="fa fa-angle-right"></i></a>
						</dd>
					</dl>
				</div-->
				<br /><br /><br />
			</section>
		</div>
	</div>
</main>
