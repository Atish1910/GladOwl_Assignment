<?php
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

			if(mail($to, $subject, $send_msg, $headers)){
				mail($to_user, $subject_user, $send_msg_user, $headers);
				echo "y";
			}

?>
