<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.04 - Manipulação de objetos");

/*
 * [ manipulação ] http://php.net/manual/pt_BR/language.types.object.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

    $arrProfile = [
        "name" => "Gustavo",
        "company" => "Gust Soluções",
        "mail" => "gustavoferreira.png@gmail.com"
    ];

    //cria um objeto
    $objProfile = (object)$arrProfile;
    //var_dump($arrProfile, $objProfile);

    echo "<p>{$arrProfile['name']} trabalha na {$arrProfile['company']}</p>";
    echo "<p>{$objProfile->name} trabalha na {$objProfile->company}</p>";

    $ceo = $objProfile;
    //apaga atributos do obj
    unset($ceo->company);
    var_dump($ceo);

    $company = new StdClass();
    $company->company = "Gust Soluções";
    $company->ceo = $ceo;
    $company->manager = new StdClass();
    $company->manager->name = "Kaue";
    $company->manager->mail = "cursos@upinside.com";

    var_dump($company);

/**
 * [ análise ] class | objetcs | instances
 */
fullStackPHPClassSession("análise", __LINE__);

    $date = new DateTime('now', new DateTimeZone('America/Sao_Paulo'));

    var_dump([
        //nome da classe
        "class" => get_class($date),
        //ver métodos
        "methods" => get_class_methods($date),
        //var atributos/variáveis
        "vars" => get_object_vars($date),
        "parent" => get_parent_class($date),
        "subclass" => is_subclass_of($date, "DateTime")
    ]);

    $exception = new PDOException();

    var_dump([
        //nome da classe
        "class" => get_class($exception),
        //ver métodos
        "methods" => get_class_methods($exception),
        //var atributos/variáveis
        "vars" => get_object_vars($exception),
        "parent" => get_parent_class($exception),
        "subclass" => is_subclass_of($exception, "Exception")
    ]);