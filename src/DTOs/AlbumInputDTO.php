<?php


namespace App\DTOs;


class AlbumInputDTO
{
    public function __construct($data)
    {
        foreach ($data as $key => $value) {
            $this->{$key} = $value;
        }
    }

    public $name;
    public $year;
    public $artists;
}