<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.11 - Trabalhando com funções");

/*
 * [ functions ] https://php.net/manual/pt_BR/language.functions.php
 */
fullStackPHPClassSession("functions", __LINE__);

    require __DIR__ . "/functions.php";

    var_dump(functionName("Pearl Jam", "AC/DC", "Alter Bridge"));
    var_dump(functionName("Gustavo", "Ferreira", "Santos"));

    var_dump(optionsArgs("Gustavo"));
    var_dump(optionsArgs("Gustavo", "Ferreira"));
    var_dump(optionsArgs("Gustavo", "Ferreira", "Santos"));

/*
 * [ global access ] global $var
 */
fullStackPHPClassSession("global access", __LINE__);

    $weight = 86;
    $height = 1.83;

    echo calcImc();

/*
 * [ static arguments ] static $var
 */
fullStackPHPClassSession("static arguments", __LINE__);

    $pay = payTotal(200);
    $pay = payTotal(250);
    echo $pay;

/*
 * [ dinamic arguments ] get_args | num_args
 */
fullStackPHPClassSession("dinamic arguments", __LINE__);

var_dump(myTeam("Flamengo", "Corinthians", "Palmeiras"));