<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.03 - Qualificação e encapsulamento");

/*
 * [ namespaces ] http://php.net/manual/pt_BR/language.namespaces.basics.php
 */
fullStackPHPClassSession("namespaces", __LINE__);

require __DIR__ . "/classes/App/Template.php";
require __DIR__ . "/classes/Web/Template.php";

$appTemplate = new App\Template();
$webTemplate = new Web\Template();

var_dump(
 $appTemplate,
 $webTemplate
);

//apelidar o use permite que seja utilizado duas classes com o mesmo nome
use App\Template;
use Web\Template AS WebTemplate;

$appUseTemplate = new Template();
$webUseTemplate = new WebTemplate();

var_dump(
    $appUseTemplate,
    $webUseTemplate
);

/*
 * [ visibilidade ] http://php.net/manual/pt_BR/language.oop5.visibility.php
 */
fullStackPHPClassSession("visibilidade", __LINE__);

require __DIR__ . "/source/Qualifield/User.php";

$user = new \Source\Qualifield\User();

//atributos privados tem que ser manipulados por métodos públicos
//$user->firstName = "Gustavo";
//$user->lastName = "Ferreira";

//$user->setFirstName("Gustavo");
//$user->setLastName("Ferreira");

var_dump(
    $user,
    get_class_methods($user)
);

echo "<p>O e-mail de {$user->getFirstName()} é {$user->getEmail()}</p>";

/*
 * [ manipulação ] Classes com estruturas que abstraem a rotina de manipulação de objetos
 */
fullStackPHPClassSession("manipulação", __LINE__);

$gustavo = $user->setUser("Gustavo",
                          "Ferreira",
                             "gustavoferreira.png@gmail.com");

if(!$gustavo) {
    echo "<p class='trigger error'>{$user->getError()}</p>";
}

$joao = new \Source\Qualifield\User();
$joao->setUser("João",
               "Victor",
                  "joao@gmail.com"
);

$maria = new \Source\Qualifield\User();
$maria->setUser("Maria",
    "Eduarda",
    "maria@gmail.com"
);

var_dump(
    $user,
    $joao,
    $maria
);
