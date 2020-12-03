<?php

/**
 * @param string|null $path
 * @return string
 */
function url(string $path = null): string{
    if (strpos($_SERVER['HTTP_HOST'], CONF_URL_TEST_NAME)) {
        if ($path) {
            return CONF_URL_TEST . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
        }
        return CONF_URL_TEST;
    }

    if ($path) {
        return CONF_URL_BASE . "/" . ($path[0] == "/" ? mb_substr($path, 1) : $path);
    }

    return CONF_URL_BASE;
}

/**
 * @param string $url
 */
function redirect(string $url): void {
    header("HTTP/1.1 302 Redirect");
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        header("Location: {$url}");
        exit;
    }

    if(filter_input(INPUT_GET, "route", FILTER_DEFAULT) != $url){
        $location = url($url);
        header("Location: {$location}");
        exit;
    }
}

/**
 * @return array
 */
function default_array(): array
{
    $array = [];
    $array[0]["produtos"]["nome"] = "Produto 1";
    $array[0]["produtos"]["descricao"] = "Descrição do Produto 1";
    $array[0]["produtos"]["valor"] = "50";
    $array[0]["produtos"]["opcionais"][] = "Opcional 1";
    $array[0]["produtos"]["opcionais"][] = "Opcional 2";
    $array[0]["produtos"]["opcionais"][] = "Opcional 3";

    $array[1]["produtos"]["nome"] = "Produto 2";
    $array[1]["produtos"]["descricao"] = "Descrição do Produto 2";
    $array[1]["produtos"]["valor"] = "75";
    $array[1]["produtos"]["opcionais"][] = "Opcional 1";
    $array[1]["produtos"]["opcionais"][] = "Opcional 2";
    $array[1]["produtos"]["opcionais"][] = "Opcional 3";

    $array[3]["produtos"]["nome"] = "Produto 3";
    $array[3]["produtos"]["descricao"] = "Descrição do Produto 3";
    $array[3]["produtos"]["valor"] = "100";
    $array[3]["produtos"]["opcionais"][] = "Opcional 1";
    $array[3]["produtos"]["opcionais"][] = "Opcional 2";
    $array[3]["produtos"]["opcionais"][] = "Opcional 3";

    return $array;
}