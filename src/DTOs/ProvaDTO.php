<?php


namespace App\DTOs;


use App\Http\RequestDTOInterface;
use Symfony\Component\HttpFoundation\Request;

class ProvaDTO implements RequestDTOInterface
{
    private $name;

    public function __construct(Request $request)
    {
        $requestData = json_decode($request->getContent(), true);
        $this->name = $requestData['name'];
    }

    public function getName() {
        return $this->name;
    }

}