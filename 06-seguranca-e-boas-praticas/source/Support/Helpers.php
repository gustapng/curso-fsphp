<?php

/**
 * ################
 * ### VALIDATE ###
 * ################
 */


/**
 * @param string $email
 * @return bool
 */
function is_email(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

/**
 * @param string $password
 * @return bool
 */
function is_passwd(string $password): bool
{
    return (mb_strlen($password) >= CONF_PASSWD_MIN_LEN && mb_strlen($password) <= CONF_PASSWD_MAX_LEN ? true : false);
}

/**
 * ##############
 * ### STRING ###
 * ##############
 */

/**
 * @param string $string
 * @return string
 */
function str_slug(string $string): string
{
    $string =  filter_var(mb_strtolower($string), FILTER_UNSAFE_RAW);
    $formats = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜüÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿRr"!@#$%&*()_-+={[}]/?;:.,\\\'<>°ºª';
    $replace = 'aaaaaaaceeeeiiiidnoooooouuuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyrr                                 ';

    /** ############################
     *  ### TRATAMENTO NA STRING ###
     *  ############################
     *
     * STR_REPLACE - para substituir o caractere do 1° param pelo do °2 param e o 3° param tem a var com a string
     * TRIM - tira espaços desnecessários
     * STRTR - substitui os caracteres correspondentes em duas váriáveis 1° param são os que vão ser alterados
     * 2° param são os que vão ser adicionados
     * STRIP_TAGS - tira tags que podem ser malíciosas ex: <SCRIPT>
     * MB_CONVERT_ENCODING - corrige o encoding para que a alteração de caracteres funcione
     */

    $slug = str_replace(["-----", "----", "---", "--"], "-",
        str_replace( " ", "-",
            trim(strtr(
                strip_tags(
                    mb_convert_encoding($string, 'ISO-8859-1')
                ),
                mb_convert_encoding($formats, 'ISO-8859-1'),
                $replace))
        )
    );

    return $slug;
}

/**
 * @param $string
 * @return string
 */
function str_studly_case($string): string
{
    $string = str_slug($string);

     /**
     * MB_CONVERT_CASE - converte o case da string com base no 2° parametro selecionado
     */

    $studlyCase = str_replace(" ", "",
                        mb_convert_case(str_replace("-", " ", $string), MB_CASE_TITLE)
                  );

    return $studlyCase;
}

/**
 * @param string $string
 * @return string
 */
function str_camel_case(string $string): string
{

    /**
     * LCFIRST - a primeira letra da palavra é minúscula, o resto usa camel case
     */

    return lcfirst(str_studly_case($string));
}

/**
 * @param string $string
 * @return string
 */
function str_title(string $string): string
{
    return mb_convert_case(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS), MB_CASE_TITLE);
}

/**
 * @param string $string
 * @param int $limit
 * @param string $pointer
 * @return string
 */
function str_limit_word(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    $arrWords = explode(" ", $string);
    $numWords = count($arrWords);

    if ($numWords < $limit) {
        return $string;
    }

    $words = implode(" ", array_splice($arrWords, 0, $limit));
    return "{$words}{$pointer}";
}

/**
 * @param string $string
 * @param int $limit
 * @param string $pointer
 * @return string
 */
function str_limit_chars(string $string, int $limit, string $pointer = "..."): string
{
    $string = trim(filter_var($string, FILTER_SANITIZE_SPECIAL_CHARS));
    if (mb_strlen($string) < $limit) {
        return $string;
    }

    $chars = mb_substr($string, 0, mb_strrpos(mb_substr($string, 0, $limit), " "));
    return "{$chars}{$pointer}";
}


/**
 * ##############
 * ### URL ###
 * ##############
 */


/**
 * @param string $url
 * @return string
 */
function url(string $path): string
{
    return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
}

/**
 * @param string $url
 * @return void
 */
function redirect(string $url): void
{
    header("HTTP/1.1 302 Redirect");
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: {$url}");
        exit;
    }

    $location = url($url);
    header("Location: {$url}");
    exit;
}


/**
 * ##############
 * ###  CORE  ###
 * ##############
 */


/**
 * @return PDO
 */
function db(): PDO
{
    return \Source\Core\Connect::getInstance();
}

/**
 * @return \Source\Core\Message
 */
function message(): \Source\Core\Message
{
    return new \Source\Core\Message();
}

/**
 * @return \Source\Core\Session
 */
function session(): \Source\Core\Session
{
    return new \Source\Core\Session();
}


/**
 * ###############
 * ###  MODEL  ###
 * ###############
 */


/**
 * @return \Source\Models\User
 */
function user(): \Source\Models\User
{
    return new \Source\Models\User();
}
