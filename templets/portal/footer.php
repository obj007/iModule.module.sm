<?php
if (defined('__IM__') == false) exit;

$IM->getWidget('coursemos.sidebar')->setTemplet('@default')->doLayout();
?>

<footer class="<?php echo $IM->getPage()->layout; ?>">
    <div class="menu">
        <div class="container">
            <ul>
                <li><strong><a href="http://www.kyonggi.ac.kr/webService.kgu?menuCode=K00M05020000" target="_blank">개인정보처리방침</a></strong></li>
				<li><a href="/ko/about">CTL소개</a></li>
                <li><a href="/ko/community/notice">공지사항</a></li>
                <li><a href="">Q&amp;A</a></li>
                <li class="rt_select">
					<ul class="sns">
						<?php
						/**
						 * 템플릿설정에 페이스북 페이지 URL 이 있을 경우, 페이스북 아이콘을 표시한다.
						 */
						if ($Templet->getConfig('facebook')) { ?>
						<li><a href="<?php echo $Templet->getConfig('facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<?php } ?>
						<?php
						/**
						 * 템플릿설정에 트위터 페이지 URL 이 있을 경우, 트위터 아이콘을 표시한다.
						 */
						if ($Templet->getConfig('twitter')) { ?>
						<li><a href="<?php echo $Templet->getConfig('twitter'); ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<?php } ?>
						<?php
						/**
						 * 템플릿설정에 유튜브 페이지 URL 이 있을 경우, 유튜브 아이콘을 표시한다.
						 */
						if ($Templet->getConfig('youtube')) { ?>
						<li><a href="<?php echo $Templet->getConfig('youtube'); ?>" target="_blank"><i class="fa fa-play"></i></a></li>
						<?php } ?>
						<?php
						/**
						 * 템플릿설정에 인스타그램 페이지 URL 이 있을 경우, 인스타그램 아이콘을 표시한다.
						 */
						if ($Templet->getConfig('instagram')) { ?>
						<li><a href="<?php echo $Templet->getConfig('instagram'); ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
						<?php } ?>
					</ul>
					<div class="fam_site" data-role="input" data-type="select">
						<select>
							<option selected>FAMILY SITE <i class="fa fa-caret-down" aria-hidden="true"></i></option>
							<option value="http://www.kyonggi.ac.kr">경기대학교</option>
							<option value="http://lms.kyonggi.ac.kr">학습관리시스템(LMS)</option>
							<option value="http://barun.kyonggi.ac.kr">학생역량통합관리시스템</option>							
						</select>
					</div>
                </li>
            </ul>
        </div>
    </div>
	<div class="copyright">
		<div class="container">
			<strong class="f_logo"><img src="/modules/kgu/templets/portal/images/footer_logo.png" alt="" /></strong>
			<div class="info">
				<address><span>수원캠퍼스 : 경기도 수원시 영통구 광교산로 154-42(이의동) 종합강의동 6층 609호</span> / <span>서울캠퍼스 : 서울특별시 서대문구 경기대로9길 24(충정로2가)</span></address><p><span>전화번호 : 031-249-8844, 8845</span> <span>COPYRIGHT© Kyonggi university. ALL RIGHTS RESERVED.</span></p>
			</div>
		</div>
	</div>
</footer>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-96392875-10"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-96392875-10');
</script>
