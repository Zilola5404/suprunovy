<?php
date_default_timezone_set ( 'Europe/Moscow' );
require 'PHPMailer/PHPMailerAutoload.php';
function phpmailer_mail($from_name, $from_email, $to_name, $to_email, $subject, $body) {
    try {
	$mail = new PHPMailer ( true );
	$mail->isSMTP ();
	$mail->CharSet = 'UTF-8';
	$mail->Debugoutput = 'error_log';
	$mail->SMTPDebug = false;
	$mail->Host = "mail.nic.ru";
	$mail->Port = 465;
	$mail->SMTPSecure = 'ssl';
	$mail->SMTPAuth = true;
	$mail->Username = "noreply@xn--b1avdcfeoc9e.xn--p1ai";
	$mail->Password = "Zaya08051975";
	$mail->setFrom ( $from_email, $from_name );
	$mail->addAddress ( $to_email, $to_name );
	$mail->addReplyTo ( $from_email, $from_name );
	$mail->isHTML ( true );
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->send ();
	return '';
    } catch ( phpmailerException $e ) {
	return $e->errorMessage (); // Pretty error messages from PHPMailer
    } catch ( Exception $e ) {
        return $e->getMessage (); // Boring error messages from anything else!
    }
}
?>