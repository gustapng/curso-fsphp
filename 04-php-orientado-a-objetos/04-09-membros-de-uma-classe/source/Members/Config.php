<?php

namespace Source\Members;

class Config
{
    public const COMPANY = "Sant Soluções";
    protected const DOMAIN = "gustavoferreira.dev.br";
    private const SECTOR = "Programação";

    public static $company;
    public static $domain;
    public static $sector;

    public static function setConfig($company, $domain, $sector)
    {
        self::$company = $company;
        self::$domain = $domain;
        self::$sector = $sector;
    }

}