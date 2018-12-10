<?php
/**
 * 이 파일은 iModule 숙명여대 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * 숙명여대 기본템플릿 - 로그인페이지
 *
 * @file /modules/sm/templets/default/login.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 4. 28.
 */
if (defined('__IM__') == false) exit;
?>
<input type="hidden" name="redirect" value="<?php echo isset($_SERVER['HTTP_REFERER']) == true ? $_SERVER['HTTP_REFERER'] : ''; ?>">
<div class="login_wrap">
	<div class="left_col">
		<h1><a href=""><img src="<?php echo $Templet->getDir(); ?>/images/logo.png" alt="숙명여대"></a></h1>
		<div class="login_input">
			<div data-role="input">
				<input type="text" name="email" placeholder="아이디">
			</div>

			<div data-role="input">
				<input type="password" name="password" placeholder="비밀번호">
			</div>

			<!--div class="save_id">
				<input type="checkbox" id="save">
				<label for="save">아이디 저장</label>
			</div-->

			<button type="submit" class="btn_login">로그인</button>
		</div>
		<div class="link">
			<a href="http://portal.sookmyung.ac.kr/irj/portal" target="_blank">아이디/비밀번호 찾기</a>
		</div>
		<p class="copyright">COPYRIGHT ⓒ SOOKMYUNG UNIVERSITY ALL RIGHTS RESERVED.</p>
	</div>
	<div class="right_col">
		<div class="login_banner">
			<div>
				<img src="<?php echo $Templet->getDir(); ?>/images/img_login_bnr<?php echo rand(1,1); ?>.png?1" alt="">
			</div>
		</div>
	</div>
	<div class="login_footer">
		<p>
			<span>04310 서울특별시 용산구 청파로 47길 100(청파동 2가) 숙명여자대학교</span>
			<span>TEL : +82-2-710-9898</span>
		</p>
		<a href="http://www.sookmyung.ac.kr/sookmyungkr/1295/subview.do" target="_blank">개인정보처리방침</a>
	</div>
</div>
