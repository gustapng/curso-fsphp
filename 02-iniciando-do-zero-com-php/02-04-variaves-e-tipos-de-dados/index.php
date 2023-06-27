<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

    $userFirstName = "Gustavo";
    $userLastName = "Ferreira";
    echo "<h3>{$userFirstName} {$userLastName}</h3>";

    $user_first_name = "Gustavo";
    $user_last_name = "Ferreira";
    echo "<h3>{$user_first_name} {$user_last_name}</h3>";

    $userAge = "32";
    echo "<h3>{$userFirstName} {$userLastName} <span class='tag'> tem {$userAge} anos</span></h3>";

    $userEmail = "gustavoferreira.png@gmail.com";
    echo $userEmail;

    //variável variável

    $company = "UpInside";
    $$company = "Treinamentos";

    echo "<h3>{$company} {$UpInside}</h3>";

    //referenciar variável
    $calcA = 10;
    $calcB = 20;
    //$calcB = $calcA;
    $calcB = &$calcA;
    $calcB = 50;

    var_dump([
        "a" => $calcA,
        "b" => $calcB
        ]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

    $true = true;
    $false = false;

    var_dump($true, $false);

    $bestAge = ($userAge > 30);
    var_dump($bestAge);

    $a = 0;
    $b = 0.0;
    $c = "";
    $d = [];
    $e = null;

    var_dump($a, $b, $c, $d, $e);

    if($a || $b || $c || $d || $e){
        var_dump(true);
    } else {
        var_dump(false);
    }

/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

    $code = "<Article><h1>Um Call User Function!</U></h1></Article>";
    $codeClear = call_user_func("strip_tags", $code);
    var_dump($code, $codeClear);

    $codeMore = function($code){
      var_dump($code);
    };

    $codeMore("#BoraProgramar!");

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

    $string = "Olá mundo!";
    $array = [$string];
    $object = new StdClass();
    $object->hello = $string;
    $null = null;
    $int = 1;
    $float = 1.2321;

    var_dump([
        $string,
        $array,
        $object,
        $null,
        $int,
        $float
    ]);