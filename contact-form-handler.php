<html>
	<head>
		<title>contact form handler</title>
		<meta charset="utf-8" />
		<link href="contact-form.css" type="text/css" rel="stylesheet" />
	</head>
    <body>
<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_message = $_POST['cf_message'];

$mail_to='lx58@cornell.edu';
$subject='Message from a site visitor'.$field_name;

$body_message ='From: '.$field_name."\n";
$body_message.='E-mail: '.$field_email."\n";
$body_message.= 'Message: '.$field_message;

$headers = "From: $cf_email\r\n";
$headers .="Reply-To:$cf_email\r\n";

$mail_status = mail ($mail_to, $subject, $body_message, $headers);

// if the mail() function executed 
if($mail_status){ ?>
<script language="javascript" type="text/javascript">
    //print a message
    alert('Thank you for the message.  I will contact you shortly.');
    //Redirect to some page of the site.
    window.location = 'index.html';
</script>
<?php
}
//if the mail() fucntion fails
else{ ?>
<script language="javascript" type="text/javascript">
    //print a message
    alert("Message failed.  Please send an email to lx58@cornell.edu");
    //Redirect to some page.
    window.location= 'index.html#contact';
</script>
<?php
} ?>
