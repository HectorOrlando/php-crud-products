<?php

declare(strict_types=1);

namespace Infrastructure\Repositories;

use Domain\CreateProductRepositoryInterface;
use Domain\Product;
use Domain\ProductRepository;
use Infrastructure\Connections\Mysql\Connection;

require_once("/xampp/htdocs/php-crud-products/src/Infrastructure/Connections/Mysql/Connection.php");
require_once("/xampp/htdocs/php-crud-products/src/Domain/Product.php");
require_once("/xampp/htdocs/php-crud-products/src/Domain/ProductRepository.php");

class PDOProductRepository implements ProductRepository
{
    private $PDO;

    public function __construct()
    {
        $con = new Connection();
        $this->PDO = $con->connection();
    }

    /**
     * @return Product[]
     */
    public function getAllProducts(): array
    {
        $sql = "SELECT * FROM product";
        $stmt = $this->PDO->query($sql);
        $productsFound = $stmt->fetchAll();

        $products = [];
        foreach ($productsFound as $product) {
            $products[] = new Product(
                $product["id"],
                $product["name"],
                $product["price"],
                $product["active"]
            );
        }

        return $products;
    }

    public function getProductById(int $id): ?Product
    {
        $sql = "SELECT * FROM product WHERE id = :id LIMIT 1";
        $stmt = $this->PDO->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        $productData = $stmt->fetch();
        if ($productData) {
            $id = $productData['id'];
            $name = $productData['name'];
            $price = $productData['price'];
            $active = $productData['active'];
            $product = new Product($id, $name, $price, $active);
            return $product;
        } else {
            return false;
        }
    }

    public function createProduct(Product $product): bool
    {
        var_dump('dentro PDO de la funcion createProduct');
        $sql = "INSERT INTO product(name, price, active) VALUES (:name, :price, :active)";
        $stmt = $this->PDO->prepare($sql);
        $productData = [
            "name" => $product->getName(),
            "price" => $product->getPrice(),
            "active" => $product->getActive()
        ];
        return ($stmt->execute($productData)) ? true : false;
    }

    public function deleteProductById(int $id): bool
    {
        $sql = "DELETE FROM product WHERE id=:id";
        $stament = $this->PDO->prepare($sql);
        $stament->bindParam(":id", $id);
        return ($stament->execute()) ? true : false;
    }

    public function updateProductById(int $id, Product $product): bool
    {
        $sql =  "UPDATE product SET name=:name, price=:price, active=:active WHERE id=$id";
        $stmt = $this->PDO->prepare($sql);
        return ($stmt->execute([
            "name" => $product->getName(),
            "price" => $product->getPrice(),
            "active" => $product->getActive()
        ])) ? true : false;
    }
}
// El repositorio siempre devuelve un modelo.