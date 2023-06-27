<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

    $index = [
        "AC/DC",
        "Nirvana",
        "Alter Bridge"
    ];

    $assoc = [
        "band_1" => "AC/DC",
        "band_2" => "Nirvana",
        "band_3" => "Alter Bridge"
    ];

    //adiciona no início
    array_unshift($index, '', 'Black Sabbath');
    //adiciona no final
    array_push($index, "");

    $assoc = ["band_4" => "Black Sabbath", "band_5" => ""] + $assoc;
    $assoc = $assoc + ["band_6" => ""];

    //apaga a primeira posição do array
    array_shift($index);
    array_shift($assoc);

    //apaga a ultima posição do array
    array_pop($index);
    array_pop($assoc);

    array_unshift($index, '');

    //elimina todos os indíces que não tiverem valores
    $index = array_filter($index);
    $assoc = array_filter($assoc);

    var_dump(
        $index,
        $assoc
    );

/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

    $index = array_reverse($index);
    $assoc = array_reverse($assoc);

    //ordena pelo valor
    asort($index);
    asort($assoc);

    //ordena pela key
    ksort($index);
    krsort($index);

    //ordena pelo valor e re-indexar o array
    sort($index);

    //ordena pela key porém da maior para menor
    rsort($index);

    var_dump(
        $index,
        $assoc
    );

/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

    var_dump([
        array_keys($assoc),
        array_values($assoc)
    ]);

    //verifica se tem AC/DC no array - com a func in_array
    if(in_array("AC/DC", $assoc)) {
         echo "<p>Cause I`m back!</p>";
    }

    //convertendo array para string, e implodindo os dados separados por ,
    $arrToString = implode(", ", $assoc);
    echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
    echo "{$arrToString}</p>";

    //convertendo string para array, e criando um array separando os valores onde tem ,
    var_dump(explode(", ", $arrToString));

/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

    $profile = [
        "name" => "Gustavo",
        "company" => "UpInside",
        "mail" => "gustavoferreira.png@gmail.com",
    ];

    $template = <<<TPL
        <article>
            <h1>{{name}}</h1>
            <p>{{company}}</p>
            <a href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar E-mail</a>
        </article>
    TPL;

    echo $template;

    echo str_replace(
        array_keys($profile), array_values($profile), $template
    );

    $replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

    echo $replaces;

    //var_dump(explode("&", $replaces));
    echo str_replace(
        explode("&", $replaces),
        array_values($profile),
        $template
    );