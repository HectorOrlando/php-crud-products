<?php

declare(strict_types=1);

use Infrastructure\Controllers\UpdateProductController;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Controllers/UpdateProductController.php");

$controller = new UpdateProductController();
$controller->updateProductById();
