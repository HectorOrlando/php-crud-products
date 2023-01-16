<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repositories\PDOProductRepository;
use Application\CreateProduct;
use Domain\Product;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Repositories/PDOProductRepository.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/CreateProduct.php");
require_once("/xampp/htdocs/php-crud-products/src/Domain/Product.php");

class CreateProductController
{
    public function createProduct()
    {
        $id = null;
        $name = $_POST["name"];
        $price = $_POST["price"];
        $active = ($_POST["active"] == "on") ? 1 : 0;

        $productRepository = new PDOProductRepository();
        $createService = new CreateProduct($productRepository);
        ($createService->create($id, $name, $price, $active)) ? header("Location:index.php") : header("Location:index.php");
    }
}
