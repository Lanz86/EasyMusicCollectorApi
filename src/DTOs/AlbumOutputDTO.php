<?php


namespace App\DTOs;

class AlbumOutputDTO
{
    public function __construct($name, $cover, $year, $artists, $genres, $tracks)
    {
        $this->name = $name;
        $this->cover = $cover;
        $this->year = $year;
        $this->artists = $artists;
        $this->genres = $genres;
        $this->tracks = $tracks;
    }

    public $name;
    private $cover;
    private $year;
    private $artists;
    private $genres;
    private $tracks;

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

    public function getGenres() {
        return $this->genres;
    }

    public function getTracks() {
        return $this->tracks;
    }

}