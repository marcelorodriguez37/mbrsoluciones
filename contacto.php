<?php 
print($POST['name']);
die();
$to='info@mbrsoluciones.com';

$subject='this is our test email';

$message='<h1> Es un prueba. </h1><p> veremos si funca</p>';
$headers="From:The Sender Name <ro-milp@hotmail.com>\r\n";
$headers.="Reply-To:ro-milp@hotmail.com>\r\n";
$headers.="Content-type: text/html\r\n";

mail($to,$subject,$message,$headers);

?>