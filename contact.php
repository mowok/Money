<?php
require 'Init.php';
$grid = $app->layout->add('CRUD');
$grid->setModel(new friends($db));
$grid->addQuickSearch();

?>