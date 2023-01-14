<?php

declare(strict_types=1);

use Infrastructure\Controllers\DeleteProductController;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Controllers/DeleteProductController.php");

$controller = new DeleteProductController();
$controller->deleteProductById();
