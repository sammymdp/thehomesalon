<?php

include("../config.php");

require '../PHPMailer/PHPMailerAutoload.php';

if($_REQUEST['app_name'] != '' && $_REQUEST['app_email'] != '' && $_REQUEST['app_phone'] != '' &&  $_REQUEST['app_service'] != '' && $_REQUEST['app_date'] != '' && $_REQUEST['app_time'] != ''){

	$appointmentid = time();
	$app_name = $_REQUEST['app_name'];
	$app_email = $_REQUEST['app_email'];
	$app_phone = $_REQUEST['app_phone'];
	$app_service = $_REQUEST['app_service'];
	$app_date = $_REQUEST['app_date'];
	$app_time = $_REQUEST['app_time'];
	$app_message = $_REQUEST['app_message'];
	$app_message = ($app_message != "")?$_REQUEST['app_message']:"NULL";
	$dt_added = strtotime(date('Y-m-d H:i:s'));

	$query = "INSERT INTO appointment (appointmentid, serviceid, name, email, phone, message, `date`, `time`, status, dt_added, dt_updated) VALUES ('".$appointmentid."', '".$app_service."', '".$app_name."', '".$app_email."', '".$app_phone."', '".$app_message."', '".$app_date."', '".$app_time."', '0', '".$dt_added."', '".$dt_added."')";
	$result = $conn->query($query);

	if($result){

		//Mail Send To User
		$mail = new PHPMailer;
		$mail->IsSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
		$mail->Port = 587;                                    // Set the SMTP port
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'neel.cmexpertise@gmail.com';                // SMTP username
		$mail->Password = 'mind@123';                  // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail->From = "kaushalthakkar9898.kt@gmail.com";
		$mail->FromName = 'Kaushal Thakkar';
		$mail->AddAddress("$app_email", '');  // Add a recipient
		$mail->IsHTML(true);                                  // Set email format to HTML
		$mail->Subject = "The Home Salon - Appointment";
		$mail->Body = "Thank you for your appointment. Your appointment has been booked on Date: $app_date and Time: $app_time.";
		$mail->Send();

		//Mail Send To Admin
		$mail_admin = new PHPMailer;
		$mail_admin->IsSMTP();                                      // Set mailer to use SMTP
		$mail_admin->Host = 'smtp.gmail.com';                 // Specify main and backup server
		$mail_admin->Port = 587;                                    // Set the SMTP port
		$mail_admin->SMTPAuth = true;                               // Enable SMTP authentication
		$mail_admin->Username = 'neel.cmexpertise@gmail.com';                // SMTP username
		$mail_admin->Password = 'mind@123';                  // SMTP password
		$mail_admin->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
		$mail_admin->From = "kaushalthakkar9898.kt@gmail.com";
		$mail_admin->FromName = 'Kaushal Thakkar';
		$mail_admin->AddAddress("kaushalthakkar9898.kt@gmail.com", '');  // Add a recipient
		$mail_admin->IsHTML(true);                                  // Set email format to HTML
		$mail_admin->Subject = "The Home Salon - Appointment";
		$mail_admin->Body = "Name: $app_name<br> Email: $app_email<br> Date: $app_date<br>Time: $app_time";
		$mail_admin->Send();
		
		echo '1';
	}else{
		echo '2';
	}
}else{
	echo '2';
}