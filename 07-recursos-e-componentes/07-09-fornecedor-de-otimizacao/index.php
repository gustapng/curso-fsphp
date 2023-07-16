<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("07.09 - Fornecedor de otimização");

require __DIR__ . "/../vendor/autoload.php";

/*
 * [ optimizer ] https://packagist.org/packages/coffeecode/optimizer
 */
fullStackPHPClassSession("optimizer", __LINE__);

$seo = new \Source\Support\Seo();
$seo->render(
    "Formação Full Stack PHP Develor",
    "A melhor e mais completa formação php do Brasil.",
    "http://gustavoferreira.dev.br",
    ""
);

var_dump($seo->optimizer()->debug(), $seo->optimizer()->data());