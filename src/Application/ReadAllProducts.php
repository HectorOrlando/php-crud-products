<?php

declare(strict_types=1);

namespace Application;

use Domain\ProductRepository;

require_once("/xampp/htdocs/php-crud-products/src/Domain/ProductRepository.php");

class ReadAllProducts
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->getAllProducts();
    }
}
