<?php

require_once __DIR__.'/Request.php';
require_once __DIR__.'/Kernel.php';
require_once __DIR__.'/HtmlView.php';
require_once __DIR__.'/../src/Controller/ListController.php';



$routesCollection = array(
    'students-list' => array('controller' => 'ListController', 'action' => 'list')
);


$request = Request::createFromGlobals();
$htmlView = new HtmlView();

$kernel = new Kernel($htmlView, $routesCollection);
try {
    $kernel->handle($request);
} catch (\Exception $e) {
    echo $e->getMessage();
}
