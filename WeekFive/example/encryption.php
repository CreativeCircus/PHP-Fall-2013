<?php

	$usernameFromForm = "daniel";
	$passwordFromForm = "abc123";
	
	$salt = "W3Ath3R#1_";
	
	$saltedPass = md5($salt . $passwordFromForm);
	
	echo ($saltedPass);
	die();
	if (md5($saltedPass) === 'e99a18c428cb38d5f260853678922e03') {
		echo 'Access granted';
	} else {
		echo "Access denied";
	}

?>