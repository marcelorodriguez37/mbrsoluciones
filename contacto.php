<?php 
$nombre=$_POST['nombre'];
$tel=$_POST['telefono'];
$email=$_POST['mail'];
$mensaje=$_POST['mensaje'];

$to='info@mbrsoluciones.com';

//$subject='this is our test email';

$message=$mensaje;

$headers="From:".$nombre.' '.$tel.' '.$email."\r\n";

//$headers="From:The Sender Name<ro-milp@hotmail.com>\r\n";
//$headers.="Reply-To:ro-milp@hotmail.com>\r\n";
$headers.="Content-type: text/html\r\n";

mail($to,$subject,$message,$headers);

?>
