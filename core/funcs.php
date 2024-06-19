<?php

function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function dd($data)
{
    dump($data);
    die;
}

function abort($code = 404): void
{
    http_response_code($code);
    require CONTROLLERS . "/errors/{$code}.php";
    die;
}
