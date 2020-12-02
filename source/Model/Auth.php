<?php


namespace Source\Model;


use Source\Core\Session;

class Auth
{
    private $auth;

    public function __construct()
    {
        list($this->auth["user"],
             $this->auth["pass"]) = explode(",", file(__DIR__ . "/../../shared/docs/auth.txt")[0]);
    }

    public static function user()
    {
        $session = new Session();
        if(!$session->has("user")){
            return null;
        }

        return $session->user;
    }

    public function login(string $user, string $pass): bool
    {
        if($user != $this->auth["user"]) {
            return false;
        }

        if(md5($pass) != $this->auth["pass"]) {
            return false;
        }

        (new Session())->set("user", "Rota Exata");

        return true;
    }
}