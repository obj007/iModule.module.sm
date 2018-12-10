<div class="paddingBox">
	<div class="help">
		<button type="button">로그인 안내</button>
		
		<div class="helpBox">
			<div>학내 구성원은 신분에 따라 아이디에 학번 또는 사번, 패스워드를 입력하여 로그인합니다.</div>
		</div>
	</div>
	
	<div class="loginForm">
		<div class="input">
			<div data-role="input" data-default="야야야">
				<input type="text" name="email" placeholder="학번 또는 사번">
			</div>
			<div data-role="input" data-default="야야야">
				<input type="password" name="password" placeholder="패스워드">
			</div>
		</div>
		<button type="submit">로그인</button>
	</div>
	
	<div class="link">
		<?php $looper = 0; foreach ($login_menu as $login) { ?>
		<?php echo $looper > 0 ? '| ': ''; ?><button type="button" onclick="iModule.openPopup('<?php echo $login->url; ?>',<?php echo $login->width; ?>,<?php echo $login->height; ?>,0);"><?php echo $login->text; ?></button>
		<?php $looper++; } ?>
	</div>
</div>

<div class="errorBox" data-error="로그인에 실패하였습니다. 학번 또는 사번 및 패스워드를 다시 한번 확인하여 주시기 바랍니다."></div>