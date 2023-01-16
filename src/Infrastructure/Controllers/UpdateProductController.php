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
        $id = (int)$_POST["id"];
        $name =  $_POST["name"];
        $price =  $_POST["price"];
        $active = isset($_POST["active"]) ? 1 : 0;
        $productRepository = new PDOProductRepository();
        $updateProductService = new UpdateProductById($productRepository);
        $updateProductService->updateProductById($id, $name, $price, $active);
    }
}
