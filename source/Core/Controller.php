<?php


namespace Source\Core;


class Controller
{
    protected $view;

    public function __construct(string $path = null)
    {
        $this->view = new View($path);
    }
}