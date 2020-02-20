<?php


namespace App\DTOs;


class ArtistDTO
{
    public function __construct($name)
    {
        $this->name = $name;
    }

    private $name;

    public function getName() {
        return $this->name;
    }
}