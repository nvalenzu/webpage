<?php
	if($_POST['message'] != ''){
	
		$message=$_POST["message"];
		$message = $message . "\n";
		$tmp = file_get_contents('mensajes.txt');
		$content = $message.$tmp;
		file_put_contents('mensajes.txt', $content);
	
		$theinfo = file("mensajes.txt");
	
		echo nl2br("ultima palabra enviada: ". $theinfo[0]);
	}
	else{

                $theinfo = file("mensajes.txt");
		//echo "porfavor escibe algo, no dejes el campo vacio";	
               	echo nl2br('ultima palabra enviada: '.$theinfo[0]);
		
	}
	
 	
?>
<meta http-equiv="refresh" content = "30" />


