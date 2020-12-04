<?php

namespace Source\App;

use Source\Core\Controller;
use Source\Core\Session;
use Source\Model\Auth;


/**
 * Class Web
 * @author Pedro Dimbarre
 * @package Source\App
 */
class Web extends Controller
{
    /**
     * Web constructor.
     */
    public function __construct()
    {
        parent::__construct(__DIR__ . "/../../themes/rotaexata");
    }

    /**
     * @param array|null $data
     */
    public function home(?array $data): void
    {
        $products = default_array();

        echo $this->view->render("home", [
            "products" => $products
        ]);
    }

    /**
     * @param array|null $data
     */
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

    public function logout(): void
    {
        (new Session())->destroy();
        redirect("/");
        return;
    }
}