<?php


namespace App\DTOs;


use App\Http\RequestDTOInterface;
use Symfony\Component\HttpFoundation\Request;

class GenreOutputDTO
{
    public function __construct($id, $name, $code)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code  = $code;
    }

    private $id;
    private $name;
    private $code;

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getCode() {
        return $this->code;
    }
}