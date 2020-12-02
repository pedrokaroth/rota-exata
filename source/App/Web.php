<?php


namespace Source\App;




use Source\Core\Controller;
use Source\Model\Auth;


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

    public function login(?array $data): void
    {
        if(!empty($data)) {
            $data = filter_var_array($data, FILTER_SANITIZE_STRIPPED);

            $auth = new Auth();

            if(empty($data["user"]) || empty($data["pass"])) {
                $json["message"] = "Usuário ou senha não enviado!";
                echo json_encode($json);
                return;
            }

            if(!$auth->login($data["user"], $data["pass"])) {
                $json["message"] = "Usuário ou senha inválido!";
                echo json_encode($json);
                return;
            }

            $json["redirect"] = url();
            echo json_encode($json);
            return;
        }

        echo $this->view->render("login", [

        ]);
    }
}