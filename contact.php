<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['comment'];

$mail_to = 'chilunliu@gmail.com';
$subject = 'Message from a site visitor '.$field_name;

$body_message = 'Name *'.$field_name."\n";
$body_message .= 'Email Address *'.$field_email."\n";
$body_message .= 'Comments * '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. I will contact you shortly.');
		window.location = 'index.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to chilunliu@gmail.com');
		window.location = 'index.html';
	</script>
<?php
}
?>
