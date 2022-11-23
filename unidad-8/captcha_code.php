<?php
	session_start();
	function txt_captcha(){
		$text="0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM";
		$code='';
		for($i=0;$i<5;$i++){
		$code.=$text[rand(0,61)];
	}
	return $code;
	}
	$_SESSION['captcha']=txt_captcha();
?>