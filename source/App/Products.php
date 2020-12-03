<?php


namespace Source\App;


use Source\Core\Controller;
use Source\Model\Auth;

class Products extends Controller
{
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/rotaexata");

        if(!Auth::user()) {
            redirect("/");
        }
    }

    public function product(?array $data): void
    {
        echo $this->view->render("product", [

        ]);
    }
}