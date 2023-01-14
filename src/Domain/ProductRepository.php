<?php

declare(strict_types=1);

namespace Domain;

use Domain\Product;

interface ProductRepository
{
    /* 
    * @return Product[]
    */
    public function getAllProducts(): array;

    /* 
    * @return Product
    */
    public function getProductById(int $id): ?Product;

    public function createProduct(Product $product): bool;

    public function deleteProductById(int $id): bool;

    public function updateProductById(int $id, Product $product): bool;
}
