<?php

include (dirname(__DIR__)."/src/Controller/InventoryController.php");


use Src\Controller\InventoryController;


header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");
header("Access-Control-Max-Age: 86400");
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Authorization, Origin');

// Handling the Preflight
if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
    exit;
}

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri = explode( '/', $uri );

// all of our endpoints start with /entity
// everything else results in a 404 Not Found
if ($uri[1] !== 'inventory') {
    header("HTTP/1.1 404 Not Found");
    exit();
}

// the id must be a number and is optional:
$Id = null;

if (isset($_GET['id'])) {
    $Id = (int) $_GET['id'];
}


$requestMethod = $_SERVER["REQUEST_METHOD"];

$controller = new InventoryController($requestMethod, $Id);
$controller->processRequest();

//echo $requestMethod;