<?php

function dump($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

function printr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

function dd($data)
{
    dump($data);
    die;
}

function ddp($data)
{
    printr($data);
    die;
}

function abort($code = 404, $msg = 'Requested page not found'): void
{
    // $msg = $message;
    http_response_code($code);
    require CONTROLLERS . "/errors/{$code}.php";
    die;
}

function load($fillable = [])
{
    $data = [];
    foreach ($_POST as $key => $value) {
        if (in_array($key, $fillable)) {
            $data["$key"] = trim($value);
        }
    }
    return $data;
}

function old($fieldname)
{
    return isset($_POST["{$fieldname}"]) ? h($_POST["{$fieldname}"]) : '';
}

function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES);
}

function redirect($url = '')
{
    if($url){
        $redirect = $url;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    die;
}
