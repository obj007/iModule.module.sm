<section class="logged">
	<div class="login_box">
		<div class="user">
			<div class="photo">
				<i style="background-image:url(<?php echo $member->photo; ?>);"></i>
			</div>
			<div class="info">
				<span class="name"><?php echo $member->name; ?>님
				<?php if ($me->isAdmin() == true || $IM->getModule('ctl')->isAdmin() == true) { ?> <a href="/admin/modules/ctl" target="_blank"><i class="xi xi-crown"></i></a><?php } elseif($IM->getModule('admin')->checkPermission() !== false) { ?><a href="/admin/" target="_blank"><i class="xi xi-crown"></i></a><?php }?>
				<button type="button" class="logout" onclick="Member.logout(this);">로그아웃</button></span>
				<div class="department"><?php echo $member->coursemos != null && $member->coursemos->institution != null ? $member->coursemos->institution->title : ''; ?> <?php echo $member->coursemos != null && $member->coursemos->department != null ? $member->coursemos->department->title : ''; ?></div>
			</div>
		</div>
		<ul class="buttons">
			<li>
				<span data-role="badge" data-badge="coursemos-notification"></span>
				<a href="http://lms.kyonggi.ac.kr/local/ubnotification/" target="_blank"><i class="xi xi-bell"></i> 알림</a>
			</li>
			<li>
				<span data-role="badge" data-badge="coursemos-message"></span>
				<a href="http://lms.kyonggi.ac.kr/local/ubmessage/" target="_blank"><i class="fa fa-envelope-o"></i> 메세지</a>
			</li>
			<li>
				<a href="https://lms.kyonggi.ac.kr" target="_blank"><i class="xi xi-book"></i> 내강의실(LMS)</a>
			</li>
			<li>
				<a href="/ko/mypage/application/list/progress"><i class="xi xi-tagged-book"></i> 신청현황</a>
			</li>
		</ul>
	</div>
</section>
