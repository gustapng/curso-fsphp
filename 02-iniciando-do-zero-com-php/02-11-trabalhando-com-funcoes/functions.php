<?php

function functionName($arg1, $arg2, $arg3)
{
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

function optionsArgs($arg1, $arg2 = true, $arg3 = null)
{
    $body = [$arg1, $arg2, $arg3];
    return $body;
}

function calcImc(){
    //(global) usa os valores de variáveis que estão setadas fora do escopo da func
    global $weight;
    global $height;
    return $weight / ($height * $height);
}

function payTotal($price)
{
    //atributo estático
    static $total;
    $total += $price;

    return "<p>O total a pagar é R$ ".number_format($total, 2, ",", ".") . "</p>";
}

function myTeam()
{
    //e bom para quando a func pode receber muitos parámetros mas a definição na func ficaria grande
    $teamNames = func_get_args();
    $teamCount = func_num_args();
    return ["teams" => $teamNames, "count" => $teamCount];
}