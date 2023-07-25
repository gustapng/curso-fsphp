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
        echo $this->view->render("home", [
            "title" => "CaféControl - Gerencie suas contas com o melhor café"
        ]);
    }

    public function about(): void
    {
        echo "<h1>Sobre</h1>";
    }

    /**
     * SITE NAV ERROR
     * @param array $data
     * @return void
     */
    public function error(array $data): void
    {
        echo $this->view->render("error", [
            "title" => "{$data['errcode']} | Ooops!"
        ]);
    }
}