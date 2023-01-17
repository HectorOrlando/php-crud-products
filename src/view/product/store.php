<?php

declare(strict_types=1);

use Infrastructure\Controllers\ProductController;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Controllers/ProductController.php");

$controller = new ProductController();
$controller->createProduct();
