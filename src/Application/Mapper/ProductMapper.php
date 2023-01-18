<?php

declare(strict_types=1);

namespace Application\Mapper;

use Application\Dto\ProductDTO;
use Domain\Product;

require_once("/xampp/htdocs/php-crud-products/src/Application/Dto/ProductDTO.php");
require_once("/xampp/htdocs/php-crud-products/src/Domain/Product.php");

class ProductMapper
{
    public static function toDTO(Product $product)
    {
        return new ProductDTO($product->getId(), $product->getName(), $product->getPrice(), $product->getActive());
    }

    public static function toEntity(ProductDTO $productDTO)
    {
        return Product::create($productDTO->id, $productDTO->name, $productDTO->price, $productDTO->active);
    }
}
