<?php

function view($view, $data = [])
{
    foreach ($data as $key => $value) {
        $$key = $value;
    }
    require "Views/template/app.php";
}

function dump(...$dump)
{
    echo "<pre>";
    var_dump($dump);
    echo "</pre>";
}
function dd(...$dump)
{
    dump(...$dump);
    exit();
}

function abort($code)
{
    http_response_code($code);
    view($code);
    die();
}

function flash()
{
    return new Flash;
}

function config($chave = null)
{
    $config = require 'config.php';
    if (strlen($chave) > 0) {
        return $config[$chave];
    }
    return $config;
}


function auth(){
    if(!isset($_SESSION['auth'])) return false;
    return $_SESSION['auth'];
}