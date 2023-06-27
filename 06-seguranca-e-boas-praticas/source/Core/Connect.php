<?php

namespace Source\Core;

use \PDO;
use \PDOException;

/**
 *
 */
class Connect
{


    /**
     * SET NAMES utf-8 - Para os dados terem o mesmo encode do banco
     * PDO::ERRMODE_EXCEPTION - para erros que aconterem serem uma excessão
     * PDO::FETCH_OBJ - para converter os resultados em objetos anônimos (OO)
     * PDO::CASE_NATURAL - garante que use o mesmo nome das colunas no bando de dados
     */
    private const OPTIONS = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];

    private static $instance;

    /**
     * @return PDO
     */
    public static function getInstance(): PDO
    {
        if(empty(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:host=" . CONF_DB_HOST . ";dbname=" . CONF_DB_NAME . ";",
                    CONF_DB_USER,
                    CONF_DB_PASS,
                    self::OPTIONS
                );
            } catch (PDOException $exception) {
                die("<h1>Whoops! Erro ao conectar...</h1>");
            }
        }

        return self::$instance;
    }

    /**
     * Connect constructor
     */
    final private function __construct()
    {
    }

    /**
     * @return void Connect clone
     */
    private function __clone()
    {
    }
}