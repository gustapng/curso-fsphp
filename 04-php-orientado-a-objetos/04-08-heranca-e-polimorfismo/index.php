<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.08 - Herança e polimorfismo");

require __DIR__ . "/source/autoload.php";

/*
 * [ classe pai ] Uma classe que define o modelo base da estrutura da herança
 * http://php.net/manual/pt_BR/language.oop5.inheritance.php
 */
fullStackPHPClassSession("classe pai", __LINE__);

$event = new \Source\inheritance\Event\Event(
    "Workshop FSPHP",
    new DateTime("2023-05-20 16:00"),
    2500,
    "4"
);

var_dump($event);

$event->register("Gustavo Ferreira", "gustavoferreira.png@gmail.com");
$event->register("Maria", "maria@gmail.com");
$event->register("João", "joao@gmail.com");
$event->register("Luiz", "luiz@gmail.com");
$event->register("Jaqueline", "jaqueline@gmail.com");

/*
 * [ classe filha ] Uma classe que herda a classe pai e especializa seuas rotinas
 */
fullStackPHPClassSession("classe filha", __LINE__);

$address = new \Source\inheritance\Address("Av Paulista", "711");
$eventLive = new \Source\inheritance\Event\EventLive(
    "Workshop FSPHP",
    new DateTime("2023-05-20 16:00"),
    2500,
    "4",
    $address
);

var_dump($eventLive);

$eventLive->register("Gustavo Ferreira", "gustavoferreira.png@gmail.com");
$eventLive->register("Maria", "maria@gmail.com");
$eventLive->register("João", "joao@gmail.com");
$eventLive->register("Luiz", "luiz@gmail.com");
$eventLive->register("Jaqueline", "jaqueline@gmail.com");

/*
 * [ polimorfismo ] Uma classe filha que tem métodos iguais (mesmo nome e argumentos) a class
 * pai, mas altera o comportamento desses métodos para se especializar
 */
fullStackPHPClassSession("polimorfismo", __LINE__);

$eventOnline = new \Source\inheritance\Event\EventOnline(
    "Workshop FSPHP",
    new DateTime("2023-05-20 16:00"),
    197,
    "http://gustavoferreira.dev.br",
);

var_dump($eventOnline);

$eventOnline->register("Gustavo Ferreira", "gustavoferreira.png@gmail.com");
$eventOnline->register("Maria", "maria@gmail.com");
$eventOnline->register("João", "joao@gmail.com");
$eventOnline->register("Luiz", "luiz@gmail.com");
$eventOnline->register("Jaqueline", "jaqueline@gmail.com");


