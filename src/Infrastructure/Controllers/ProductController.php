<?php

declare(strict_types=1);

namespace Infrastructure\Controllers;

use Infrastructure\Repositories\PDOProductRepository;
use Application\CreateProduct;
use Application\RemoveProductById;
use Application\UpdateProductById;
use Application\ReadAllProducts;
use Application\ReadProductById;
use Application\Dto\ProductDTO;
use Application\Dto\DeleteProductDTO;
use Application\Dto\ReadProductDTO;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Repositories/PDOProductRepository.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/CreateProduct.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/RemoveProductById.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/UpdateProductById.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/ReadAllProducts.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/ReadProductById.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/Dto/ProductDTO.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/Dto/DeleteProductDTO.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/Dto/ReadProductDTO.php");

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

        $productDto = new ProductDTO($id, $name, $price, $active);
        $createService = new CreateProduct($this->productRepository);
        ($createService->createProduct($productDto)) ? header("Location:index.php") : header("Location:index.php");
    }

    public function deleteProductById()
    {
        $id = (int)$_GET["id"];
        $deleteProductDTO = new DeleteProductDTO($id);
        $deleteService = new RemoveProductById($this->productRepository);
        $deleteService->deleteProductById($deleteProductDTO->getId());
    }

    public function updateProductById()
    {
        $id = (int)$_POST["id"];
        $name =  $_POST["name"];
        $price =  $_POST["price"];
        $active = isset($_POST["active"]) ? 1 : 0;
        $updateProductService = new UpdateProductById($this->productRepository);
        $productDto = new ProductDTO($id, $name, $price, $active);
        $updateProductService->updateProductById($productDto);
    }

    public function readAllProducts()
    {
        $readService = new ReadAllProducts($this->productRepository);
        return $readService->getAllProducts();
    }

    public function readProductById()
    {
        $id = (int)$_GET["id"];
        $readProductDTO = new ReadProductDTO($id);
        $readService = new ReadProductById($this->productRepository);
        return $readService->getProductById($readProductDTO->getId());
    }
}
