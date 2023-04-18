<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

//caracteres com acentos são considerados como 2, porque o acento é como se fosse um individual

//multibyte faz com que o caractere que tenha acento seja contado como somente um caractere

    $string = 'O último show do AC/DC foi incrível!';

    var_dump([
        "string" => $string,
        "strlen" => strlen($string),
        "mb_strlen" => mb_strlen($string),
        "substr" => substr($string, "9"),
        "mb_substr" => mb_substr($string, "9"),
        "strtoupper" => strtoupper($string),
        "mb_strtoupper" => mb_strtoupper($string)
    ]);


/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

    $mbString = $string;

    var_dump([
        "mb_strtoupper" => mb_strtoupper($mbString),
        "mb_strtolower" => mb_strtolower($mbString),
        "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER),
        "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
        "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE),
    ]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);



/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);