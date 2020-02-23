<?php


namespace App\DTOs;


use App\Http\RequestDTOInterface;
use Symfony\Component\HttpFoundation\Request;

class GenreInputDTO implements RequestDTOInterface
{
    public function __construct(Request $request)
    {
        $genreReq = json_decode($request->getContent(), true);
        //$this->id =  $genreReq["id"];
        $this->name = $genreReq["name"];
    }

    //public $id;
    public $name;
}