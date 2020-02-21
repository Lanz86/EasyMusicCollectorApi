<?php


namespace App\DTOs;


use App\Http\RequestDTOInterface;
use Symfony\Component\HttpFoundation\Request;

class ArtistOutputDTO
{
    public function __construct($id, $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    private $id;
    private $name;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }
}