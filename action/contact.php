<?php

include("../config.php");

require '../PHPMailer/PHPMailerAutoload.php';

if($_REQUEST['name'] != '' && $_REQUEST['email'] != '' && $_REQUEST['subject'] != ''){

	$contactid = time();
	$name = $_REQUEST['name'];
	$email = $_REQUEST['email'];
	$subject = $_REQUEST['subject'];
	$message = $_REQUEST['message'];
	$dt_added = strtotime(date('Y-m-d H:i:s'));

	$query = "INSERT INTO contact (contactid, name, email, subject, message, dt_added) VALUES ('".$contactid."', '".$name."', '".$email."', '".$subject."', '".$message."', '".$dt_added."')";
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
		$mail->AddAddress("$email", '');  // Add a recipient
		$mail->IsHTML(true);                                  // Set email format to HTML
		$mail->Subject = "Contact Us";
		$mail->Body = "Thank you for your request. A customer service representative will respond to your questions in 24-48 hrs.";
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
		$mail_admin->Subject = "Contact Us";
		$mail_admin->Body = "Name: $name<br> Email: $email<br> Subject: $subject<br>Message: $message";
		$mail_admin->Send();
		
		echo '1';
	}else{
		echo '2';
	}
}else{
	echo '2';
}