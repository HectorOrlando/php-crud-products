<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repositories\PDOProductRepository;
use Application\CreateProduct;
use Application\RemoveProductById;
use Application\UpdateProductById;
use Application\ReadAllProducts;
use Application\ReadProductById;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Repositories/PDOProductRepository.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/CreateProduct.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/RemoveProductById.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/UpdateProductById.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/ReadAllProducts.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/ReadProductById.php");

class ProductController
{
    private $productRepository;

    public function __construct()
    {
        $this->productRepository = new PDOProductRepository();
    }

    public function createProduct()
    {
        $id = null;
        $name = $_POST["name"];
        $price = $_POST["price"];
        $active = ($_POST["active"] == "on") ? 1 : 0;
        $createService = new CreateProduct($this->productRepository);
        ($createService->create($id, $name, $price, $active)) ? header("Location:index.php") : header("Location:index.php");
    }

    public function deleteProductById()
    {
        $id = (int)$_GET["id"];
        $deleteService = new RemoveProductById($this->productRepository);
        $deleteService->deleteProductById($id);
    }

    public function updateProductById()
    {
        $id = (int)$_POST["id"];
        $name =  $_POST["name"];
        $price =  $_POST["price"];
        $active = isset($_POST["active"]) ? 1 : 0;
        $updateProductService = new UpdateProductById($this->productRepository);
        $updateProductService->updateProductById($id, $name, $price, $active);
    }

    public function readAllProducts()
    {
        $readService = new ReadAllProducts($this->productRepository);
        return $readService->getAllProducts();
    }

    public function readProductById()
    {
        $id = (int)$_GET["id"];
        $readService = new ReadProductById($this->productRepository);
        return $readService->getProductById($id);
    }
}
