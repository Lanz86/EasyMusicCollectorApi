<?php


namespace App\DTOs;


use App\Http\RequestDTOInterface;
use Symfony\Component\HttpFoundation\Request;

class PageResultInputDTO implements RequestDTOInterface
{
    private $_page;

    public function __construct(Request $request)
    {
        $this->_page = $request->get('_page');
    }

    public function getPage() {
        return $this->_page;
    }
}