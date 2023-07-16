<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.04 - Utilizando um componente");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ instance ] https://packagist.org/packages/phpmailer/phpmailer
 */
fullStackPHPClassSession("instance", __LINE__);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception as MailException;

$phpmailer = new PHPMailer();
var_dump($phpmailer instanceof PHPMailer);

/*
 * [ configure ]
 */
fullStackPHPClassSession("configure", __LINE__);

try {
    $mail = new PHPMailer(true);

    //CONFIG
    $mail->isSMTP();
    $mail->setLanguage("br");
    $mail->isHTML(true);
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = "tls";
    $mail->CharSet = "utf-8";

    //AUTH
    $mail->Host = "smtp.gmail.com";
    $mail->Username = "guuxts@gmail.com";
    $mail->Password = "itfa nheg cmjr dift";
    $mail->Port = "587";

    //MAIL
    $mail->setFrom("guuxts@gmail.com", "Gustavo Ferreira");
    $mail->Subject = "Esse é meu envio via componente FSPHP";
    $mail->msgHTML("<h1>Olá mundo! Esse é meu segundo disparo de e-mail</h1>");
    $mail->addAddress("gustavoferreira.png@gmail.com", "Gustavo FSPHP");


    //SEND
    $send = $mail->send();
    var_dump($send);

    //itfa nheg cmjr dift
} catch (MailException $exception) {
    var_dump($exception);
    echo message()->error($exception->getMessage());
}