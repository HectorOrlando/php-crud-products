<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repositories\PDOProductRepository;
use Application\UpdateProductById;
use Domain\Product;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Repositories/PDOProductRepository.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/UpdateProductById.php");
require_once("/xampp/htdocs/php-crud-products/src/Domain/Product.php");

class UpdateProductController
{
    public function updateProductById()
    {
        $id = $_POST["id"];
        $name =  $_POST["name"];
        $price =  $_POST["price"];
        $active = isset($_POST["active"]) ? 1 : 0;
        $product = new Product($id, $name, $price, $active);
        $id = (int)$product->getId();
        $productRepository = new PDOProductRepository();
        $createProductService = new UpdateProductById($productRepository);
        ($createProductService->updateProductById($id, $product)) ? header("Location:show.php?id=$id") : header("Location:index.php");
    }
}
