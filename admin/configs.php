<?php
/**
 * 이 파일은 iModule 경기대 연동모듈의 일부입니다. (http://www.coursemos.kr)
 *
 * 경기대학교 시스템과 연동을 위한 설정폼을 생성한다.
 * 
 * @file /modules/kgu/admin/configs.php
 * @author Arzz (arzz@arzz.com)
 * @license GPLv3
 * @version 3.0.0
 * @modified 2018. 9. 27.
 */
if (defined('__IM__') == false) exit;
?>
<script>
var config = new Ext.form.Panel({
	id:"ModuleConfigForm",
	border:false,
	bodyPadding:10,
	width:600,
	fieldDefaults:{labelAlign:"right",labelWidth:100,anchor:"100%",allowBlank:true},
	items:[
		new Ext.form.FieldSet({
			title:"학사 데이터베이스 설정",
			items:[
				new Ext.form.TextField({
					fieldLabel:"학사디비접속정보",
					name:"haksa",
					afterBodyEl:'<div class="x-form-help">학사디비 접속정보를 JSON 형태로 입력하여 주십시오.</div>'
				})
			]
		})
	]
});
</script>