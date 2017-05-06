<?php
require 'Init.php';

$grid = $app->layout->add('CRUD');
$grid->setModel(new loan($db)); 
$grid->addQuickSearch();
//$grid->addAction('Money',new \atk4\ui\jsExpression('document.location="money_lend.php?friends_id="+$(this).closest("tr").data("id");'));
?>