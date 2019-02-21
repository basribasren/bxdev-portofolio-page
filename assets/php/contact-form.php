<?php

require 'php-mailer/class.phpmailer.php';

if (isset($_POST["submit"])) {

	session_cache_limiter('nocache');
	header('Expires: ' . gmdate('r', 0));

	header('Content-type: application /json');
	$mail = new PHPMailer;
    $emailFrom = $_POST['email'];
	$nameFrom = $_POST['name'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	try {
	    //Server settings
	    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
	    $mail->isSMTP();                                      // Set mailer to use SMTP
	    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	    $mail->SMTPAuth = true;                               // Enable SMTP authentication
	    $mail->Username = 'aroonzfi@gmail.com';                 // SMTP username
	    $mail->Password = 'basriilma';                           // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	    $mail->Port = 587;                                    // TCP port to connect to

	    //Recipients
	    $mail->setFrom($emailFrom, $nameFrom);
	    $mail->addAddress('basri.basreen@gmail.com', 'Basri Basren');     // Add a recipient
	    // $mail->addAddress('aroonzfi@gmail.com');               // Name is optional
	    $mail->addReplyTo('basri.official.acc@gmail.com', 'Mailer');
	    // $mail->addCC('cc@example.com');
	    // $mail->addBCC('bcc@example.com');

	    //Attachments
	    // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->CharSet = 'UTF-8';
	    $mail->Subject = $subject;
	    $mail->Body    = $message;
	    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    if(!$mail->Send()) {
		   $arrResult = array ('response'=>'error');
		}

		$arrResult = array ('response'=>'success');

		return json_encode($arrResult);

	} catch (Exception $e) {
	    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
	}  
}                           

?>