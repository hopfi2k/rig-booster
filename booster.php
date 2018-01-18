<?php

function autoload($className)
{
    $fileName = __DIR__ . '/src/' . $className . '.php';

    require $fileName;
}
spl_autoload_register('autoload');


// main program


// configuration handling
$config =new config();

// exchangerates from whattomine
$rates = new exchangesrates();

// proxy server
$proxy = new proxy($config, $rates);