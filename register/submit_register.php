<?php
       
   	    //$ip = "";
		if (@$_SERVER["HTTP_X_FORWARDED_FOR"]) 
		$ip = $_SERVER["HTTP_X_FORWARDED_FOR"]; 
		else if (@$_SERVER["HTTP_CLIENT_IP"]) 
		$ip = $_SERVER["HTTP_CLIENT_IP"]; 
		else if (@$_SERVER["REMOTE_ADDR"]) 
		$ip = $_SERVER["REMOTE_ADDR"]; 
		else if (@getenv("HTTP_X_FORWARDED_FOR"))
		$ip = getenv("HTTP_X_FORWARDED_FOR"); 
		else if (@getenv("HTTP_CLIENT_IP")) 
		$ip = getenv("HTTP_CLIENT_IP"); 
		else if (@getenv("REMOTE_ADDR")) 
		$ip = getenv("REMOTE_ADDR"); 
		else 
		$ip = "Unknown"; 

         $url = "http://register.kuaikuenglish.com/Register_Action/add_customer_action";
   
          $csr_http_referer = isset($_POST['csr_http_referer'])?$_POST['csr_http_referer']:'';   
	 	  $csr_nickname = isset($_POST['csr_nickname'])?$_POST['csr_nickname']:'';
	 	  $csr_mobile = isset($_POST['csr_mobile'])?$_POST['csr_mobile']:'';
	 	  $csr_tencent_qq =  isset($_POST['csr_tencent_qq'])?$_POST['csr_tencent_qq']:'';
	 	  $csr_email = isset($_POST['csr_email'])?$_POST['csr_email']:'';
	 	  $csr_register_url =  isset($_POST['csr_register_url'])?$_POST['csr_register_url']:'';
	 	  $csr_adid =  isset($_POST['csr_adid'])?$_POST['csr_adid']:'';
	 	  $csr_oto_type = isset($_POST['csr_oto_type'])?$_POST['csr_oto_type']:'';
	 	  $csr_user_behavior = isset($_POST['csr_user_behavior'])?$_POST['csr_user_behavior']:'';
	 	  $csr_enrollment_requirements = isset($_POST['csr_enrollment_requirements'])?$_POST['csr_enrollment_requirements']:'';
	 	  
	 	  $csr_from_ip= $ip;
	 	  
	 	 // $csr_from_url = $_SERVER['HTTP_REFERER'];
	 	  $csr_from_url = "http://www.kuaikuenglish.com";
	 	  
	 	  
	 	  
		 	  
           $vars = array(
               'csr_nickname'=>$csr_nickname,
               'csr_mobile'=>$csr_mobile,
               'csr_tencent_qq'=>$csr_tencent_qq,
               'csr_email'=>$csr_email,
               'csr_register_url'=>$csr_register_url,
               'csr_adid'=>$csr_adid,
               'csr_oto_type'=>$csr_oto_type,
               'csr_from_url'=>$csr_from_url,
               'csr_user_behavior'=>$csr_user_behavior,
               'csr_from_ip'=>$ip,
               'csr_enrollment_requirements'=>$csr_enrollment_requirements,
               'csr_http_referer'=>$csr_http_referer);
           
	    $ch = curl_init();     
	    curl_setopt($ch, CURLOPT_URL, $url);   
	    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//dont output
	    curl_setopt($ch, CURLOPT_HEADER, 0);
	    curl_setopt($ch, CURLOPT_POST, 1);//POST Request  1:POST
	    curl_setopt($ch, CURLOPT_POSTFIELDS, $vars);//POST Filed    
	    curl_setopt($ch, CURLOPT_VERBOSE, 1 );
	    $data = curl_exec($ch);
	    curl_close($ch);      
	    echo $data;
  
  
?>