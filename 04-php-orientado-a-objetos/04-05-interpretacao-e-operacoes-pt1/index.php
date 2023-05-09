<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.05 - Interpretação e operações pt1");

require __DIR__ . "/source/autoload.php";

/*
 * [ construct ] Executado automaticamente por meio do operador new
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__construct", __LINE__);

//$user = new \Source\Interpretation\User();
$user = new \Source\Interpretation\User(
    "Gustavo",
    "Ferreira"//,
    //"guuxts@gmail.com"
);

var_dump($user);

/*
 * [ clone ] Executado automaticamente quando um novo objeto é criado a partir do operador clone.
 * http://php.net/manual/pt_BR/language.oop5.cloning.php
 */
fullStackPHPClassSession("__clone", __LINE__);

$gustavo = $user;
$joao = $gustavo;
$joao->setFirstName("Maria");
$joao->setLastName("Joaquina");

$gustavo->setFirstName("Gustavo");
$gustavo->setLastName("Ferreira");

$joao = clone $gustavo;
$joao->setFirstName("Maria");
$joao->setLastName("Joaquina");

$lucas = clone $gustavo;

//entra no __destruct
$joao = null;

var_dump(
    $gustavo,
    $joao,
    $lucas
);


/*
 * [ destruct ] Executado automaticamente quando o objeto é finalizado
 * http://php.net/manual/pt_BR/language.oop5.decon.php
 */
fullStackPHPClassSession("__destruct", __LINE__);

//exemplo dentro da classe