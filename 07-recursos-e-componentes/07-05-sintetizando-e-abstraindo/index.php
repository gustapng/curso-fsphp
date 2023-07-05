<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.05 - Sintetizando e abstraindo");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ synthesize ]
 */
fullStackPHPClassSession("synthesize", __LINE__);

$email = (new \Source\Core\Email())->bootstrap(
    "Olá mundo, esse é o meu e-mail!",
    "<h1>Olá mundo,<p>esse é um teste da classe, que envia uma mensagem via rotina de aplicação</p></h1>",
    "gustavoferreira.png@gmail.com",
    "Gustavo santos"
);

$email->attach(__DIR__ . "/../../DataBase.sql", "SQL");
$email->attach(__DIR__ . "/../../README.md", "READ_ME");

if ($email->send()) {
    echo message()->success("Email enviado com sucesso!");
} else {
    echo $email->message();
}

//var_dump($email);