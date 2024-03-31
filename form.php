<?php
/* conecto mi form /name /con el server a traves de los name  */
$nombre = $_POST['nombre'];
$nombre = $_POST['email']; 
$nombre = $_POST['numero']; 
$nombre = $_POST['pagina'];
$nombre = $_POST['comentario'];   


/* vamos a mostrar un texto plano  */

$header .= "content-Type: text/plain    ";

/* como me va llegar el cuerpo de texto del mail a mi, o sea  */
$mensaje = "este mesaje fue enviado por" . $nombre . ",/r/n";
$mensaje = "su e-mail es: " . $mail . ",/r/n";
$mensaje = "su numero es:" . $numero . ",/r/n";
$mensaje = "su pagina" . $web . ",/r/n";
$mensaje = "comentario:" . $_POST . ",/r/n";
$mensaje = "enviando el " . date('d/m/Y', time());

$para = 'jhanpierre123452@hotmail.com' ; //el email donde va llegar los mensajes 
$asunto = 'mensaje de sitio web';


mail($para,$asunto, utf8_decode($mensaje), $header);

header('Location:exito.html');

?>


