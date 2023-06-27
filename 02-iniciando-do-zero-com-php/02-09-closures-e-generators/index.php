<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

//funções anónimas

    $myage = function ($year) {
        $age = date("Y") - $year;
        return "<p>Você tem {$age} anos</p>";
    };

    echo $myage(2002);

    $priceBrl = function ($price) {
        return number_format($price, 2, ",", ".");
    };

    echo "<p>Projeto custa R$ {$priceBrl(3600)}. Vamos fechar?</p>";

    $myCart = [];
    $myCart["totalPrice"] = 0;
    $cardAdd = function ($item, $qtd, $price) use (&$myCart) {
        $myCart[$item] = $qtd * $price;
        $myCart["totalPrice"] += $myCart[$item];
    };

    $cardAdd("HTML5", 1, 378);
    $cardAdd("CSS", 2, 132);

    var_dump($myCart);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

    $iterator = 200000;

    //renderiza os dados sem colocar na memória(melhora a velocidade de exibição)
    function generatorDate($days) {
        for ($day = 1;  $day < $days; $day++) {
            yield date("d/m/y", strtotime("+{$day}days"));
        }
    }

    echo "<div style='text-align: center'>";
        foreach (generatorDate($iterator) as $date) {
           echo "<small class='tag'>{$date}</small><br>" . PHP_EOL;
        }
    echo "</div>";
