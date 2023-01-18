<?php

declare(strict_types=1);

namespace Application\Dto;

class ReadProductDTO
{
    public $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }
}
