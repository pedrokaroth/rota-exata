<?php


namespace Source\App;


use Source\Core\Controller;

class Web extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/rotaexata");
    }

    public function home(?array $data): void
    {
        echo $this->view->render("home", [

        ]);
    }
}