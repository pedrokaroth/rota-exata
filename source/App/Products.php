<?php


namespace Source\App;


use Source\Core\Controller;
use Source\Core\Session;
use Source\Model\Auth;
use Source\Model\Product;

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
        if(!empty($data) && $data["action"] == "create") {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            (new Product())->create($data["name"], $data["value"], $data["desc"], [$data["opA"], $data["opB"]]);

            $json["message"] = "Produto {$data['name']} adicionado com sucesso!";
            $json["redirect"] = url("/");
            echo json_encode($json);
            return;
        }

        echo $this->view->render("product", [

        ]);
    }
}