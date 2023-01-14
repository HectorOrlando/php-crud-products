<?php

declare(strict_types=1);

namespace Application;

use Domain\ProductRepository;

require_once("/xampp/htdocs/php-crud-products/src/Domain/ProductRepository.php");

class RemoveProductById
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function deleteProductById(int $id)
    {
        return $this->productRepository->deleteProductById($id);
    }
}
