<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    require __DIR__ . "/../vendor/autoload.php";

    $seo = new \Source\Support\Seo();
    echo $seo->render(
        "Formação Full Stack PHP Develor",
        "A melhor e mais completa formação php do Brasil.",
        "http://gustavoferreira.dev.br",
        ""
    );

    ?>
</head>
<body>

<p><?= $seo->title;?></p>
<p><?= $seo->description;?></p>

<?= "<pre>", print_r($seo->data(),true) ,"</pre>"?>

</body>
</html>
