<?php


namespace App\DTOs;


use App\Http\RequestDTOInterface;
use Symfony\Component\HttpFoundation\Request;

class AlbumUpdateInputDTO implements RequestDTOInterface
{
    public function __construct(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $this->name = $data['name'];
        $this->artists = $data['artists'];
        $this->year = $data['year'];
        $this->generes = $data['generes'];
        $this->type = $data['type'];
        $this->support = $data['support'];
    }

    public $name;
    public $artists;
    public $year;
    public $generes;
    public $type;
    public $support;
}