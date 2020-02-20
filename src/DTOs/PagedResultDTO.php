<?php


namespace App\DTOs;


class PagedResultDTO
{
    public function __construct($page, $limit, $count, $data)
    {
        $this->page = $page;
        $this->limit = $limit;
        $this->count = $count;
        $this->data = $data;
    }

    private $page;
    private $limit;
    private $count;
    private $data;

    public function getPage() {
        return $this->page;
    }

    public function setPage($page) {
        $this->page = $page;
    }

    public function getLimit() {
        return $this->limit;
    }

    public function setLimit($value) {
        $this->limit = $value;
    }

    public function getCount() {
        return $this->count;
    }

    public function setCount($value) {
        $this->count = $value;
    }

    public function getData() {
        return $this->data;
    }

    public function setData($value) {
        $this->data = $value;
    }
}