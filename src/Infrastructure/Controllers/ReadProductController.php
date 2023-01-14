<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repositories\PDOProductRepository;
use Application\ReadProductById;
use Application\ReadAllProducts;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Repositories/PDOProductRepository.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/ReadProductById.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/ReadAllProducts.php");


class ReadProductController
{
    public function readProductById()
    {
        $id = (int)$_GET["id"];
        $productRepository = new PDOProductRepository();
        $createService = new ReadProductById($productRepository);
        return $createService->getProductById($id);
    }

    public function readAllProducts()
    {
        $productRepository = new PDOProductRepository();
        $createService = new ReadAllProducts($productRepository);
        return $createService->getAllProducts();
    }
}
