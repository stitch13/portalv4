<?php
require_once __DIR__ . '/../vendor/autoload.php';

use alunos\biblioteca\Controllers\indexController as index;

$controller = new index;
$controller->run();