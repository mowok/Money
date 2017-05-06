<?php
require 'vendor/autoload.php';
$app = new \atk4\ui\App('Money Lending App');
$layout = $app->initLayout('Admin');
$layout =$app->layout;
$layout->leftMenu->addItem(['Friends','icon'=>'code'], 'contact.php');
$layout->leftMenu->addItem(['Loan','icon'=>'code'], 'lend.php');
//DB
$db = new
\atk4\data\Persistence_SQL('mysql:dbname=money;host=localhost','mowok','1234');

?>