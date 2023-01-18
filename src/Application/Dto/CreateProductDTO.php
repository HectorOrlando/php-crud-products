<?php

declare(strict_types=1);

namespace Application\Dto;

class CreateProductDTO
{
    public $name;
    public $price;
    public $active;

    public function __construct($name, $price, $active)
    {
        $this->name = $name;
        $this->price = $price;
        $this->active = $active;
    }
}
