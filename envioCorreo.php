<?php

$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$telefono=$_POST["telefono"];
$email=$_POST["email"];
$consulta=$_POST["mensaje"];


ini_set ( ' display_errors ' , 1 ) ;
error_reporting ( E_ALL ) ;
$from = $email;
$to =" mobelart@mobelart.com.ar " ;
$subject =" Consulta " ;
$message = $nombre . " " . $apellido . " " . $telefono . "\n" . $consulta;
mail ( $to , $subject , $message) ;
echo " The email message was sent . " ;

?>
