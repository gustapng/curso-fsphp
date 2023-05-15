<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("04.09 - Membros de uma classe");

require __DIR__ . "/source/autoload.php";

/*
 * [ constantes ] http://php.net/manual/pt_BR/language.oop5.constants.php
 */
fullStackPHPClassSession("constantes", __LINE__);

use Source\Members\Config;
$config = new Config();
echo "<p>" . $config::COMPANY . "</p>";

var_dump(
    Config::COMPANY
    //Config::DOMAIN,
            //Config::SECTOR
);

//testando classes

//$reflection = new ReflectionClass($config);
$reflection = new ReflectionClass(Config::class);

var_dump($config, $reflection->getConstants());

/*
 * [ propriedades ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("propriedades", __LINE__);

Config::$company = "Sant soluções";
Config::$domain = "gustavoferreira.dev.br";
Config::$sector = "Programação";

$config::$sector = "Tecnologia";

var_dump($config, $reflection->getProperties(), $reflection->getStaticProperties());

/*
 * [ métodos ] http://php.net/manual/pt_BR/language.oop5.static.php
 */
fullStackPHPClassSession("métodos", __LINE__);

$config::setConfig("", "", "");
$config::setConfig("Sant soluções", "gustavoferreira.dev.br", "Programação");

var_dump($config, $reflection->getMethods(), $reflection->getStaticProperties());

/*
 * [ exemplo ] Uma classe trigger
 */
fullStackPHPClassSession("exemplo", __LINE__);

use Source\Members\Trigger;

$trigger = new Trigger();
$trigger::show("Um objeto trigger");

var_dump($trigger);

$trigger::show("Essa é uma mensagem para o usuário!");
$trigger::show("Essa é uma mensagem para o usuário!", Trigger::ACCEPT);
$trigger::show("Essa é uma mensagem para o usuário!", Trigger::WARNING);
$trigger::show("Essa é uma mensagem para o usuário!", Trigger::ERROR);

echo Trigger::push("Essa é uma retorno para o usuário!");
echo Trigger::push("Essa é uma retorno para o usuário!", Trigger::ACCEPT);
echo Trigger::push("Essa é uma retorno para o usuário!", Trigger::WARNING);
echo Trigger::push("Essa é uma retorno para o usuário!", Trigger::ERROR);