<?php

declare(strict_types=1);

use Infrastructure\Controllers\CreateProductController;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Controllers/CreateProductController.php");

$controller = new CreateProductController();
$controller->createProduct();