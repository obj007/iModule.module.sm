<aside>
	<div class="header bgcolor1">
		<?php if ($IM->getModule('member')->isLogged() == true) { ?>
		<div class="photo" style="background-image:url(<?php echo $member->photo; ?>);"></div>
		<?php echo $member->name; ?>님 <button type="button" class="logout" onclick="Member.logout(this);">로그아웃</button>
		<?php } ?>
		<button type="button" class="close" onclick="OpenSlideMenu();"><i class="mi mi-close color1"></i></button>
	</div>
	
	<?php echo $loginForm; ?>

	<?php /* <button type="button"><?php echo $IM->parseIconString($menu->icon); ?><?php echo $menu->title; ?></button> */ ?>

	<ul class="menu <?php echo $IM->getModule('member')->isLogged() == true ? 'logged' : 'login'; ?>">
		<?php
		if ($menu == null) {
			foreach ($IM->getSitemap() as $menu) {
		?>
		<li<?php echo $IM->menu == $menu->menu ? ' class="opened selected"' : ''; ?>>
			<a href="<?php echo $IM->getUrl($menu->menu,false); ?>">
				<?php echo $IM->parseIconString($menu->icon); ?><?php echo $menu->title; ?>
				<?php if (count($menu->pages) > 0) { ?><i data-role="toggle" class="btn_sub_toggle fa fa-angle-down"></i><?php } ?>
			</a>

			<?php if (count($menu->pages) > 0) { ?>
			<div class="submenu">
				<?php foreach ($menu->pages as $page) { ?>
				<a href="<?php echo $IM->getUrl($page->menu,$page->page,false); ?>"<?php echo $IM->menu == $page->menu && $IM->page == $page->page ? ' class="selected"' : ''; ?>><?php echo $page->title; ?></a>
				<?php } ?>
			</div>
			<?php } ?>
		</li>
		<?php
			}
		} else {
			foreach ($IM->getPages($menu) as $page) {
		?>
		<li<?php echo $IM->menu == $page->menu && $IM->page == $page->page ? ' class="opened selected"' : ''; ?>>
			<a href="<?php echo $IM->getUrl($page->menu,$page->page,false); ?>">
				<?php echo $IM->parseIconString($page->icon); ?><?php echo $page->title; ?>
			</a>
		</li>
		<?php } } ?>
	</ul>
</aside>