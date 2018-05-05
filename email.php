<?php
session_cache_limiter('nocache');
header('Expires: ' . gmdate('r', 0));

header('Content-type: application/json');

// Enter your email address below.
$to = 'maclestudio4@gmail.com';

$subject = $_POST['subject'];

if($to) {
	$optradio5 = $_POST['optradio5'];
	$optradio4 = $_POST['optradio4'];
	//$subject = $_POST['subject'];
	$optradio3 = $_POST['optradio3'];
	$name = $_POST['name'];
	$mail = $_POST['mail'];
	
	

	$fields = array(
		0 => array(
			'text' => 'optradio5',
			'val' => $_POST['optradio5']
		),
		1 => array(
			'text' => 'optradio4',
			'val' => $_POST['optradio4']
		),
		2 => array(
			'text' => 'subject',
			'val' => $_POST['subject']
		),
		3 => array(
			'text' => 'optradio3',
			'val' => $_POST['optradio3']
		),
		4 => array(
			'text' => 'name',
			'val' => $_POST['name']
		),
		5 => array(
			'text' => 'mail',
			'val' => $_POST['mail']
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
		header("Location: http://macle.co.in/besttot/normal.php?msg=success");
		die();}
	} else{
		$arrResult = array ('response'=>'error');
		header("Location: http://macle.co.in/besttot/normal.php?msg=error");
		die();
	}

	echo json_encode($arrResult);

} else {

	$arrResult = array ('response'=>'error');
	echo json_encode($arrResult);
	header("Location: http://macle.co.in/besttot/normal.php?msg=error");
		die();

}
?>
