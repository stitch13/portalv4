<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

// config do sistema
$directory = [];
$directory['directoryROOT'] = dirname(__DIR__);

// Registro do Twig
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../resources',
));

//Chama a configuração do Doctrine para as entidades do portalv4
require_once __DIR__ . '/../config/database.php';

$app['debug'] = true;