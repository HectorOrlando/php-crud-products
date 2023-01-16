<?php

declare(strict_types=1);

namespace Domain;

class Product
{
    private $id;
    private $name;
    private $price;
    private $active;

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

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getActive()
    {
        return $this->active;
    }
    
    public static function create($id, $name, $price, $active): Product
    {
        return new Product($id, $name, $price, $active);
    }
}
