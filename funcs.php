<?php

defined("MYAPP") or die("No direct script access allowed");

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