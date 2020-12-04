<?php


namespace Source\App;


use Source\Core\Controller;
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

            if(empty($data["name"])) {
                $json["message"] = "Digite o nome do produto";
                echo json_encode($json);
                return;
            }

            if(empty($data["value"])) {
                $json["message"] = "Digite o valor do produto";
                echo json_encode($json);
                return;
            }

            if(empty($data["desc"])) {
                $json["message"] = "Digite a descrição do produto";
                echo json_encode($json);
                return;
            }

            (new Product())->create($data["name"], $data["value"], $data["desc"], [
                $data["opA"] ? "Opcional {$data["opA"]}" : null,
                $data["opB"] ? "Opcional {$data["opA"]}" : null
            ]);

            $json["message"] = "Produto {$data['name']} adicionado com sucesso!";
            $json["redirect"] = url("/");
            echo json_encode($json);
            return;
        }

        echo $this->view->render("product", [

        ]);
    }
}