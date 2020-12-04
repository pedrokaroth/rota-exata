<?php


namespace Source\Model;


use Source\Core\Session;

class Product
{
    private $session;

    public function __construct()
    {
        $this->session = new Session();
    }

    public function create(string $name, string $value, string $description , array $options): bool
    {
        $products = [];

        if($this->session->has("products")) {
            $products = (array)$this->session->products;
        }

        $products[]["produtos"] = [
            "nome" => $name,
            "valor" => $value,
            "descricao" => $description,
            "opcionais" => $options
        ];

        $this->session->set("products", $products);

        return true;
    }
}