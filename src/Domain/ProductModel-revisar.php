<?php

declare(strict_types=1);

namespace Domain;

// Interfaz del modelo de producto
interface ProductModel
{
    public function createProduct(array $data);
    public function updateProduct(int $id, array $data);
    public function deleteProduct(int $id);
}
