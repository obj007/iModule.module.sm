<?php
$IM->loadWebFont('NanumSquare',true);
$IM->loadWebFont('XEIcon');
$IM->loadWebFont('FontAwesome');
$IM->loadWebFont('OpenSans');

$IM->addHeadResource('style',$Templet->getDir().'/styles/style.css');
$IM->addHeadResource('script',$Templet->getDir().'/scripts/script.js');
$IM->addHeadResource('script',$Templet->getDir().'/scripts/menu.js');
?>


<header class="<?php echo $IM->getPage()->layout; ?>">
	<div class="top">
		<div class="container">
			<div class="link">
				<a href="http://www.kyonggi.ac.kr/" target="_blank">경기대학교</a>
				<a href="http://library.kyonggi.ac.kr/" target="_blank">중앙도서관</a>
				<a href="http://job.kyonggi.ac.kr/" target="_blank">인재개발처</a>
				<a href="http://lms.kyonggi.ac.kr/" target="_blank">LMS</a>
				<a href="http://ocw.kyonggi.ac.kr/" target="_blank">OCW</a>
			</div>
			<div class="user">
				<?php $IM->getWidget('coursemos.userbar')->setTemplet('topbar')->doLayout(); ?>
			</div>
		</div>
	</div>
	<nav>
		<div class="top_menu">
			<div class="container">
				<h1 style="background-image:url(<?php echo $IM->getSiteLogo('default'); ?>);"><a href="<?php echo $IM->getIndexUrl(); ?>">경기대학교 교수학습개발센터</a></h1>
				<ul>
					<?php foreach ($IM->getSitemap() as $menu) { if ($menu->is_hide == true) continue; ?>
					<li>
						<a href="<?php echo $IM->getUrl($menu->menu,false); ?>"><?php echo $menu->title; ?></a>
						<em></em>
						<div class="submenu">
							<ul>
								<?php $loop = 0; foreach ($menu->pages as $page) { if ($loop % 5 == 0) echo '<li>'; ?>
								<a href="<?php echo $IM->getUrl($page->menu,$page->page,false);?>"><?php echo $page->title;?></a>
								<?php if ($loop % 5 == 4) echo '</li>'; $loop++; } if ($loop % 5 != 4) echo '</li>'; ?>
							</ul>
						</div>
					</li>
					<?php } ?>
				</ul>

				<div>
					<button type="button" data-action="search"><!--i class="mi mi-search"></i--></button>
					<button type="button" data-action="all" onclick="OpenAllService(this);"><i class="mi mi-bars"></i></button>
					<button type="button" class="slide" onclick="OpenSlideMenu();"><i class="mi mi-bars"></i></button>
				</div>
			</div>
		</div>

		<div class="top_all_menu">
			<div class="container" >
				<ul>
					<?php foreach ($IM->getSitemap() as $menu) { if ($menu->is_hide == true) continue; ?>
					<li>
						<div class="box">
							<h4><?php echo $menu->title; ?></h4>

							<ul>
								<?php foreach ($menu->pages as $page) { ?>
								<li><i></i><a href="<?php echo $IM->getUrl($page->menu,$page->page,false); ?>"><?php echo $page->title; ?></a></li>
								<?php } ?>
							</ul>
						</div>
					</li>
					<?php } ?>
				</ul>
				<div class="both"></div>
			</div>
		</div>
	</nav>
</header>
