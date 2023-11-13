<?php
if($_SERVER['REQUEST_METHOD'] != 'POST' ){
    header("Location: Contacto.php");
}

/*
include("conection.php");

if(
    strlen($_POST['name']) >= 1 &&
    strlen($_POST['email']) >= 1 &&
    strlen($_POST['producto']) >= 1 &&
    strlen($_POST['cantidad']) >= 1 &&
    strlen($_POST['tipo-pago']) >= 1 &&
    strlen($_POST['descripcion']) >= 1
) {
    $consulta = "INSERT INTO cotizaciones(Descripcion, cantidad) VALUES ('$name', '$cantidad')";
    
    $result = mysqli_query($conex, $consulta);
    header("location: ../Inicio.php");
}*/

require 'phpmailer/PHPMailer.php';
require 'phpmailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;

$nombre = $_POST['name'];
$email = $_POST['email'];
$producto = $_POST['producto'];
$cantidad = $_POST['cantidad'];
$pago = $_POST['tipo-pago'];
$mensaje = $_POST['descripcion'];

if(empty(trim($nombre))) $nombre = 'anonimo';

$body = <<<HTML
    <h1>Contacto desde la web</h1>
    <p>De: $nombre / $email</p>
    <h2>Mensaje</h2>
    $mensaje
HTML;

$mailer = new PHPMailer();
$mailer->setFrom($email, "$nombre");
$mailer->addAddress('cotizaciones@maderasgala.site', 'Sitio web');
$mailer->Subject = "Solicitud de Cotizacion";
$mailer->msgHTML($body);
$mailer->AltBody = strip_tags($body);
$mailer->CharSet = 'UTF-8';

$rta = $mailer->send();
var_dump($rta);

echo '
    alert("Cotizacion enviada correctamente");
';

?>