<?php

namespace Source\App;

use Source\Core\Controller;

/**
 * Web Controller
 */
class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/" . CONF_VIEW_THEME . "/");
    }

    /**
     * SITE HOME
     * @return void
     */
    public function home(): void
    {
        echo "<h1>Home</h1>";
    }

    /**
     * SITE NAV ERROR
     * @param array $data
     * @return void
     */
    public function error(array $data): void
    {
        echo "<h1>Error</h1>";
        var_dump($data);
    }
}