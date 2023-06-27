<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.09 - Formuários e filtros");

/*
 * [ request ] $_REQUEST
 * https://php.net/manual/pt_BR/book.filter.php
 */
fullStackPHPClassSession("request", __LINE__);

    $form = new stdClass();
    $form->name = "Um nome";
    $form->mail = "um@email.com";

    //$_REQUEST recebe tanto o post quanto o get
    var_dump($_REQUEST);
    $form->method = "get";
    $form->method = "post";
    include __DIR__ . "/form.php";

/*
 * [ post ] $_POST | INPUT_POST | filter_input | filter_var
 */
fullStackPHPClassSession("post", __LINE__);

    var_dump($_POST);

    $post = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $postArray = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    var_dump ([
        $post,
        $postArray
    ]);

    if($postArray){
        //verifica se no array postArray tem algum valor vázio ""
        if(in_array("", $postArray)){
            echo "<p class='trigger warning'>Preencha todos os campos!</p>";
            //faz uma validação pra ver se está no pradrão de email
        }elseif(!filter_var($postArray["mail"], FILTER_VALIDATE_EMAIL)){
            echo "<p class='trigger warning'>Email informado não é válido!</p>";
        } else {
            //em cada indíce do array o strip_tags remove todos os códigos da string informada
            $saveStrip = array_map("strip_tags", $postArray);
            //em cada indíce do array o strip_tags remove espaços desnecessários da string
            $save = array_map("trim", $saveStrip);
            var_dump($save);
            echo "<p class='trigger accept'>Cadastro realizado com sucesso!</p>";
        }
    }

    $form->method = "post";
    include __DIR__ . "/form.php";



/*
 * [ get ] $_GET | INPUT_GET | filter_input | filter_var
 */
fullStackPHPClassSession("get", __LINE__);

    var_dump($_GET);
    $get = filter_input(INPUT_GET,"mail",FILTER_DEFAULT);
    $getArray = filter_input_array(INPUT_GET, FILTER_DEFAULT);

    $form->method = "get";
    include __DIR__ . "/form.php";

    //validar os campos = ao o que ocorre na linha 36

    var_dump($get);
    var_dump($getArray);

/*
 * [ filters ] list | id | var[_array] | input[_array]
 * http://php.net/manual/pt_BR/filter.constants.php
 */
fullStackPHPClassSession("filters", __LINE__);

    var_dump(
        filter_list(),
        [
            filter_id("validate_email"),
            FILTER_VALIDATE_EMAIL,
            filter_id("string"),
            FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ]
    );

    //filtra os dados usando usando o nome das váriaveis que virão do post e defininindo o filtro que será usado
    $filterForm = [
        "name" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            "mail" => FILTER_SANITIZE_EMAIL
    ];

    //pega os dados do get e aplica os filtros na variável filterForm
    $getForm = filter_input_array(INPUT_GET, $filterForm);
    var_dump($getForm);

    $email = "gustavoferreira.png@gmail.com";
    //se não for um email retorna false
    var_dump(
        filter_var($email, FILTER_VALIDATE_EMAIL),
        //filter_var valida quando vocẽ já tem esses dados no sistema
        filter_var_array($getForm, $filterForm)
    );