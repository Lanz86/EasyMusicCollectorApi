<?php


namespace App\DTOs;


use App\Http\RequestDTOInterface;
use Symfony\Component\HttpFoundation\Request;

class PageResultInputDTO implements RequestDTOInterface
{
    public $_page;
    public $_limit;

    public function __construct(Request $request)
    {
        $this->_page = $request->get('_page');
        $this->_limit = $request->get('_limit');
    }

    public function getPage() {
        return $this->_page;
    }

    public function getLimit() {
        return $this->_limit;
    }
}