<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

require_once __DIR__.'/../src/app.php';

// Chama a DotEnv onde se obtem as configuracoes do projeto
(new Dotenv\Dotenv(__DIR__.'/../'))->load();

$app->register(new Silex\Provider\DoctrineServiceProvider(), [
    'dbs.options' => 
    [
        'portalv4_default' => 
        [
            'driver'   => 'pdo_mysql',
            'host'     => getenv('DB_HOST'),
            'dbname'   => getenv('DB_NAME'),
            'user'     => getenv('DB_USER'),
            'password' => getenv('DB_PASS'),
            'charset'  => getenv('DB_CHARSET'),
        ]
    ],
]);
    
$paths = array("src/alunos/biblioteca/Models/Entities/Api");
$isDevMode = false;
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
$driverImpl = $config->newDefaultAnnotationDriver('src/alunos/biblioteca/Models/Entities/Api');
$config->setProxyDir('src/alunos/biblioteca/Models/Entities/Api');
$config->setProxyNamespace('src\alunos\biblioteca\Models\Entities\Api');
$config->setAutoGenerateProxyClasses(true);
//Conexão Default do projeto portal v4
$entityManager = EntityManager::create($app['dbs.options']['portalv4_default'], $config);
$app['entityManager'] = $entityManager;