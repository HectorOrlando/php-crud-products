<?php

declare(strict_types=1);

namespace Application;

use Domain\Product;
use Domain\ProductRepository;

require_once("/xampp/htdocs/php-crud-products/src/Domain/Product.php");
require_once("/xampp/htdocs/php-crud-products/src/Domain/ProductRepository.php");

class CreateProduct
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct(Product $product): bool
    {
        return $this->productRepository->createProduct($product);
    }
}
