<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.05 - Manipulação de datas");

/*
 * [ a função date ] setup | output
 * [ date ] https://php.net/manual/pt_BR/function.date.php
 * [ timezones ] https://php.net/manual/pt_BR/timezones.php
 */
fullStackPHPClassSession("a função date", __LINE__);

    var_dump([
        date_default_timezone_get(),
        date("c"),
        date("d/m/Y H:i:s")
    ]);

    define("DATE_BR", "d/m/Y H:i:s");
    //define("DATE_TIMEZONE", "Pacific/Apia");
    define("DATE_TIMEZONE", "America/Sao_Paulo");

    date_default_timezone_set(DATE_TIMEZONE,);

    var_dump([
        date_default_timezone_get(),
        date(DATE_BR)
    ]);

    var_dump(getdate());

    echo "<p>Hoje é dia ", getdate()["mday"], "!</p>";

/**
 * [ string to date ] strtotime | strftime
 */
fullStackPHPClassSession("string to date", __LINE__);

    var_dump([
        "strtotime NOW" => strtotime("now"),
        "time" => time(),
        "strtotime_10d" => strtotime("+10days"),
        "date DATE_BR" => date (DATE_BR),
        //calculos de data
        "date+10days" => date(DATE_BR, strtotime("+10days")),
        "date-10days" => date(DATE_BR, strtotime("-10days")),
        "date+1year" => date(DATE_BR, strtotime("+1year"))
    ]);


    $formatCurso = "%d/%m/%Y %Hh%M";
    echo "<p>A data de hoje é ", strftime($formatCurso), "</p>";

    $format = "d/m/Y H:m";
    echo "<p>A data de hoje é ", date($format, strtotime("now")), " minutos</p>";

    //printa a data já na string
    echo strtotime("<p>Hoje é dia %d do %d de %Y às %H e %M minutos.</p>");