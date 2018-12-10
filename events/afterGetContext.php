<?php
/**
 * 이 파일은 iModule 경기대 연동모듈의 일부입니다. (https://www.imodule.kr)
 *
 * afterGetContext 이벤트리스너를 정의한다.
 *
 * @file /modules/kgu/events/afterGetContext.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 4. 28.
 */
if (defined('__IM__') == false) exit;

/**
 * EMS 모듈
 */
if ($target == 'ems') {
	/**
	 * 로그인 컨텍스트
	 */
	if ($context == 'login') {
		$html = $me->getContext('login');
	}
}
?>
