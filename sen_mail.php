<?php
	if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'])){
		header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
		die ("<h2>Access Denied!</h2> This file is protected and not available to public.");
	}
    // include 'connection.php';
    include 'link.php';
	
	function validate($m, $k='')
	{
		$m = trim($m);
		if($m == "")
			die("Please Fill the missing Field");

		$val = array('url', 'www', 'http', '.com', 'disclaimar');
		
		if($k == "email")
		{
			if(!filter_var($m, FILTER_VALIDATE_EMAIL))
				die('Enter the valid mail');
		}
		else if($k == "phone")
		{
			if(!preg_match('/^[0-9]+$/', $m))
				die('Enter the valid Mobile Number');
			else if(strlen($m) < 10 || strlen($m) > 12 )
				die('Enter valid 10 digit Mobile Number');
		}	
		else{
			if(strlen($m) > 100){
				die('Message should be at most 100 char');
			}
			else{
				foreach($val as $v){
					if(strpos(strtolower($m), $v) !== false){
						die('You are Robot. Not Allowed');
					}
				}
			}
			
		}
		return $m;
	}

	$name = validate($_POST['name']);
	$email = validate($_POST['email'], 'email');
	$phone = validate($_POST['phone'], 'phone');
	$locality = validate($_POST['locality']);
	$plans = validate($_POST['plans']);
?>