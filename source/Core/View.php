<?php


namespace Source\Core;


use League\Plates\Engine;

class View
{
    private $engine;


    public function __construct(string $path, string $ext=CONF_VIEW_EXT)
    {
        $this->engine = Engine::create($path, $ext);
    }

    public function render(string $template, array $data): string
    {
        return $this->engine->render($template, $data);
    }
}