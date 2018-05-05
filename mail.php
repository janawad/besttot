<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

// Enter your email address below.
$to = 'maclestudio4@gmail.com';

$subject = $_POST['subject'];

if($to) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	//$subject = $_POST['subject'];
	$comments = $_POST['comments'];
	
	

	$fields = array(
		0 => array(
			'text' => 'Name',
			'val' => $_POST['name']
		),
		1 => array(
			'text' => 'Email address',
			'val' => $_POST['email']
		),
		2 => array(
			'text' => 'subject',
			'val' => $_POST['subject']
		),
		3 => array(
			'text' => 'comments',
			'val' => $_POST['comments']
		)
	);

	$message = "";

	foreach($fields as $field) {
		$message .= $field['text'].": " . htmlspecialchars($field['val'], ENT_QUOTES) . "<br>\n";
	}

	$headers = '';
	$headers .= 'From: ' . $name . ' <' . $email . '>' . "\r\n";
	$headers .= "Reply-To: " .  $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

	if (mail($to, $subject, $message, $headers)){
		$arrResult = array ('response'=>'success');
		$message = "Thank you for applying to the Questerra Experience! Our team of curators will go through your application and will get back to you within 4 working days ";
		if (mail($email, $subject, $message, $headers)){
		header("Location: http://macleartech.com/contact.php?msg=success");
		die();}
	} else{
		$arrResult = array ('response'=>'error');
		header("Location: http://macleartech.com/contact.php?msg=error");
		die();
	}

	echo json_encode($arrResult);

} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);
	header("Location: http://macleartech.com/contact.php?msg=error");
		die();

}
?>
