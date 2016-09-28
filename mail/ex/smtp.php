<?php
echo "Mensaje entrooo!";

require_once('../class.phpmailer.php');

$mail = new PHPMailer();
//indico a la clase que use SMTP
$mail­>IsSMTP();
//permite modo debug para ver mensajes de las cosas que van ocurriendo
$mail­>SMTPDebug = 2;
//Debo de hacer autenticación SMTP
$mail­>SMTPAuth = true;
$mail­>SMTPSecure = "ssl";
//indico el servidor de Gmail para SMTP
$mail­>Host = "smtp.gmail.com";
//indico el puerto que usa Gmail
$mail­>Port = 465;
//indico un usuario / clave de un usuario de gmail
$mail­>Username = "jeffersteven@gmail.com";
$mail­>Password = "stevjef920314";
$mail­>SetFrom('jeffersteven@gmail.com', 'Nombre completo1');
$mail­>AddReplyTo("jeffersteven@gmail.com","Nombre completo2");
$mail­>Subject = "Envío de email usando SMTP de Gmail";
$mail­>MsgHTML("Hola que tal, esto es el cuerpo del mensaje!");
//indico destinatario
$address = "jeffersteven@hotmail.com";
$mail­>AddAddress($address, "Nombre completo");
if(!$mail­>Send()) {
echo "Error al enviar: " . $mail­>ErrorInfo;
} else {
echo "Mensaje enviado!";
}