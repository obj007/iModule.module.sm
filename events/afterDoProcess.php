<?php
/**
 * 이 파일은 iModule 경기대 연동모듈의 일부입니다. (http://www.coursemos.kr)
 *
 * afterDoProcess 이벤트를 처리한다.
 * 
 * @file /modules/events/afterDoProcess.php
 * @author Arzz (arzz@arzz.com)
 * @license MIT License
 * @version 3.0.0
 * @modified 2018. 9. 27.
 */
if (defined('__IM__') == false) exit;

if ($target == 'coursemos') {
	if ($action == '@sync') {
		if ($values->type == 'advisor') {
			$results = $me->syncAdvisor();
		}
	}
}
?>