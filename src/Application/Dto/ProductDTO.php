<?php

declare(strict_types=1);

namespace Application\Dto;

class ProductDTO
{
    public $id;
    public $name;
    public $price;
    public $active;

    public function __construct($id, $name, $price, $active)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->active = $active;
    }

    public function getId()
    {
        return $this->id;
    }
}
