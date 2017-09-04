<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{	
	echo "post ready";
	$message = $_POST['action'];
	$fp = fopen("request.log", "a");
	fwrite($fp, $message);
	fclose($fp);
}
else{
	echo "No se hizo nada";
}

?>

