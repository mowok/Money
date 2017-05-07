<?php
require 'Init.php';
$grid = $app->layout->add('CRUD');
$grid->setModel(new friends($db));
$grid->addQuickSearch();
$grid->addAction('Loan',new \atk4\ui\jsExpression('document.location="lend.php?user_id="+$(this).closest("tr").data("id");'));
?>