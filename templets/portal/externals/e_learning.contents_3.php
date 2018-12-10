<?php
$IM->addHeadResource('style',$Templet->getDir().'/styles/e_learning.css');
?>

<div class="guide">
	<div class="intro">
		<div class="text">
			<h4 class="sub_tit">ReadyStream</h4>
			<p>콘텐츠 제작 시스템을 이용하여 화면녹화, PPT 강의 녹화 등 다양한 유형의 강의 콘텐츠를  편리하게 제작할 수 있습니다.</p>

			<a href="http://support.xinics.com/support/index.php?mid=SSP_Tutor&category=19527" target="_blank"><i class="fa fa-power-off"></i>콘텐츠 제작안내 동영상 바로가기</a>

			<div class="helpText" style="color:red; font-weight:bold;">
				<i class="fa fa-exclamation"></i>Internet Explorer에서만 실행할 수 있습니다.
			</div>
		</div>

		<div class="image">
			<img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream1.png">
		</div>
	</div>

	<ul data-role="tab" data-name="readystream" class="tab">
		<li data-tab="guide" class="selected"><button type="button">이용안내</button></li>
		<li data-tab="detail"><button type="button">콘텐츠 제작 시스템의 특징</button></li>
	</ul>

	<div data-role="tab" data-name="readystream" class="tabBox">
		<div data-tab="guide">
			<p>화면녹화 콘텐츠 제작하기</p>

			<div class="manual">
				<div class="image"><img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream7.png"></div>
				<div class="text">
					<h6>1. 콘텐츠 저작도구를 실행합니다.</h6>

					<p>
						1) [콘텐츠 제작하기]를 선택합니다.<br>
						2) [Rapid - 강의자용 프로젝트]를 선택합니다.<br><br>
						- 처음 실행 시 설치 안내가 표시됩니다.<br>
						- 콘텐츠 저작도구를 설치하신 후, 다시 [제작하기]를 누르면 실행하실 수 있습니다.
					</p>
				</div>
			</div>

			<div class="line"></div>

			<div class="manual">
				<div class="image"><img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream8.png"></div>
				<div class="text">
					<h6>2. [스크린 프레젠테이션]을 선택한 후 녹화를 시작합니다.</h6>

					<p>
						1) 저작도구가 실행되면 [스크린 프레젠테이션]을 선택합니다.<br>
						2) [녹화시작] 버튼을 선택하여 녹화를 시작합니다.<br><br>
						- 음성 녹음을 함께 하시려면 마이크가 PC에 연결되어 있어야 합니다.
					</p>
				</div>
			</div>

			<div class="line"></div>

			<div class="manual">
				<div class="image"><img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream9.png"></div>
				<div class="text">
					<h6>3. 녹화를 종료한 후 업로드 합니다.</h6>

					<p>
						1) 화면 왼쪽 하단의 [녹화 종료] 버튼을 선택하여 종료합니다.<br>
						2) [내보내기] 버튼을 선택하여 기본 정보를 입력합니다.<br>
						3) [업로드]를 하면 콘텐츠가 등록됩니다.
					</p>
				</div>
			</div>
		</div>

		<div data-tab="detail">
			<h4 class="sub_tit">원하는 유형의 콘텐츠를 손쉽게 제작할 수 있습니다.</h4>

			<div class="divide">
				<div>
					<img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream2.png">

					<h5 class="sub_min_tit">화면녹화 방식의 콘텐츠 제작</h5>
					<p>PC 화면을 그대로 녹화할 수 있어 다양한 자료나 프로그램을 그대로 활용하여 편리하게 녹화할 수 있습니다.</p>
				</div>

				<div>
					<img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream3.png">

					<h5 class="sub_min_tit">PPT 슬라이드를 이용한 콘텐츠 제작</h5>
					<p>PPT 슬라이드 자료를 이용하여 영상 녹화 또는 음성 녹음과 함께 콘텐츠를 제작할 수 있습니다.</p>
				</div>
			</div>

			<div class="line"></div>

			<h4 class="sub_tit">제작 도구에서 녹화 후 바로 업로드할 수 있습니다.</h4>
			<p>콘텐츠 제작 시스템에서 저작도구를 실행하여, 원하는 강의 콘텐츠를 녹화 후 바로 업로드할 수 있습니다.</p>

			<div class="step">
				<div>
					<div>
						<h5 class="sub_min_tit"><i>01</i>저작도구 실행</h5>
						<img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream4.png">
					</div>
				</div>
				<div>
					<div>
						<h5 class="sub_min_tit"><i>02</i>콘텐츠 녹화 진행</h5>
						<img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream5.png">
					</div>
				</div>
				<div>
					<div>
						<h5 class="sub_min_tit"><i>03</i>콘텐츠 업로드</h5>
						<img src="<?php echo $Templet->getDir(); ?>/images/guide/readystream6.png">
					</div>
				</div>
			</div>

			<div class="button">
				<a href="http://support.xinics.com/support/index.php?mid=SSP_Tutor&category=19527" target="_blank"><i class="fa fa-power-off"></i>콘텐츠 제작안내 동영상 바로가기</a>
			</div>
		</div>
	</div>
</div>
