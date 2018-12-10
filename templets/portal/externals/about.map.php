<?php
$IM->addHeadResource('style',$Templet->getDir().'/styles/about.css');
?>

<h4 class="sub_tit">찾아오는길</h4>
<div class="full_img_box map">
	<!--img src="/modules/kgu/templets/portal/images/img_map.png" alt=""-->

	<!-- * Daum 지도 - 지도퍼가기 -->
	<!-- 1. 지도 노드 -->
	<div id="daumRoughmapContainer1534757115662" class="root_daum_roughmap root_daum_roughmap_landing"></div>

	<!--
		2. 설치 스크립트
		* 지도 퍼가기 서비스를 2개 이상 넣을 경우, 설치 스크립트는 하나만 삽입합니다.
	-->
	<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

	<!-- 3. 실행 스크립트 -->
	<script charset="UTF-8">
		new daum.roughmap.Lander({
			"timestamp" : "1534757115662",
			"key" : "pkw2",
			"mapWidth" : "820",
			"mapHeight" : "400"
		}).render();
	</script>
</div>

<h4 class="sub_tit">위치 안내</h4>
<div class="gray_border_box">
	<dl class="location">
		<dt><i class="xi xi-marker-circle"></i>위치</dt>
		<dd>
			<span>종합강의동 6층 609호</span>
		</dd>
	</dl>
	<dl class="tel">
		<dt><i class="xi xi-phone"></i>전화</dt>
		<dd>031-249-8845~5</dd>
	</dl>
</div>
