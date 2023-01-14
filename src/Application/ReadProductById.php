<?php

declare(strict_types=1);

namespace Application;

use Domain\ProductRepository;

require_once("/xampp/htdocs/php-crud-products/src/Domain/ProductRepository.php");

class ReadProductById
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getProductById(int $id)
    {
        return $this->productRepository->getProductById($id);
    }
}
