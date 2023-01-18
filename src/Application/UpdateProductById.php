<?php

declare(strict_types=1);

namespace Application;

use Application\Dto\ProductDTO;
use Application\Mapper\ProductMapper;
use Domain\Product;
use Domain\ProductRepository;

require_once("/xampp/htdocs/php-crud-products/src/Application/Dto/ProductDTO.php");
require_once("/xampp/htdocs/php-crud-products/src/Application/Mapper/ProductMapper.php");
require_once("/xampp/htdocs/php-crud-products/src/Domain/Product.php");
require_once("/xampp/htdocs/php-crud-products/src/Domain/ProductRepository.php");

class UpdateProductById
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function updateProductById(ProductDTO $productDTO)
    {
        $product = ProductMapper::toEntity($productDTO);
        $id = $productDTO->getId();
        return ($this->productRepository->updateProductById($id, $product)) ? header("Location:show.php?id=$id") : header("Location:index.php");
    }
}
