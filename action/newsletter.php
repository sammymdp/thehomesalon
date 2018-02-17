<?php

include("../config.php");

if($_REQUEST['newsletter_email'] != ''){

	$newsletterid = time();
	$email = $_REQUEST['newsletter_email'];
	$dt_added = strtotime(date('Y-m-d H:i:s'));

	$query = "INSERT INTO newsletter (newsletterid, email, dt_added) VALUES ('".$newsletterid."','".$email."','".$dt_added."')";
	$result = $conn->query($query);

	if($result){
		echo '1';
	}else{
		echo '2';
	}
}else{
	echo '2';
}