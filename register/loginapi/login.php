<?php 
header("Access-Control-Allow-Origin: *");
	try {
		
		$email= (string) strip_tags(trim($_POST['account']));
		$pwd= strip_tags(trim($_POST['password']));
		$url = "http://manage.kuaikuenglish.com/user/qqe_api/login?account=".$email."&password=".$pwd."";

		$ch = curl_init();
			if (FALSE === $ch){
				throw new Exception('failed to initialize');
			}
			
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_TIMEOUT, 100);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 100);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, false); 
			
			$content = curl_exec($ch);
			
			if (FALSE === $content){
				throw new Exception(curl_error($ch), curl_errno($ch));
			}
			
		} catch(Exception $e) {				
			trigger_error(sprintf('Failed curl with error #%d: %s',$e->getCode(), $e->getMessage()),E_USER_ERROR);
		} 
	
