<?php

extract($_GET);

$to = "antoniogm14@gmail.com";
$subject = "Contact ".$email;
$headers = "From: Solomedia Web Contact <no-responder@solomediagroup.co>" . "\r\n";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

$message_html = "
<html>
<head>
<title>Mail</title>
</head>
<body>
<p>Name: '".$name."'</p>
<p>Email: '".$email."'</p>
<p>Service Required: '".$services."'</p>
<p>Message: '".$message."'</p>
</body>
</html>";

$send = mail($to, $subject, $message_html, $headers);

if($send)
{
?>
		<center><h2>Thanks you for Contact</h2></center>
		<a href=""> Volver al Inicio </a>
<?php
}else
{
	echo 'No pudo ser enviado';
}

?>
