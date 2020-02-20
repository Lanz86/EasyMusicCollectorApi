<?php


namespace App\DTOs;

class AlbumOutputDTO
{
    public function __construct($name, $cover, $year, $artists)
    {
        $this->name = $name;
        $this->cover = $cover;
        $this->year = $year;
        $this->artists = $artists;
    }

    private $name;
    private $cover;
    private $year;
    private $artists;

    public function getName() {
        return $this->name;
    }

    public function getCover() {
        return $this->cover;
    }

    public function getYear() {
        return $this->year;
    }

    public function getArtists() {
        return $this->artists;
    }

}