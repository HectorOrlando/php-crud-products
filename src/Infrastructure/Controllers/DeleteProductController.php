<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repositories\PDOProductRepository;
use Application\RemoveProductById;

require_once("C:/xampp/htdocs/php-crud-products/src/Infrastructure/Repositories/PDOProductRepository.php");
require_once("C:/xampp/htdocs/php-crud-products/src/Application/RemoveProductById.php");

class DeleteProductController
{
    public function deleteProductById()
    {
        $id = (int)$_GET["id"];
        $productRepository = new PDOProductRepository();
        $deleteProductById = new RemoveProductById($productRepository);
        $deleteProductById->deleteProductById($id) ? header("Location:index.php") : header("Location:show.php?id=$id");
    }
}
