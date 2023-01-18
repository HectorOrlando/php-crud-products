<?php

declare(strict_types=1);

namespace Application;

use Application\Dto\ProductDTO;
use Application\Mapper\ProductMapper;
use Domain\ProductRepository;

require_once("/xampp/htdocs/php-crud-products/src/Domain/ProductRepository.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/Dto/ProductDTO.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/Mapper/ProductMapper.php");

class CreateProduct
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function createProduct(ProductDTO $productDTO): bool
    {
        $product = ProductMapper::toEntity($productDTO);
        return $this->productRepository->createProduct($product);
    }
}
