<?php


namespace App\DTOs;

class AlbumOutputDTO
{
    public function __construct($name, $cover, $year, $type, $support, $artists, $genres, $tracks)
    {
        $this->name = $name;
        $this->cover = $cover;
        $this->year = $year;
        $this->type = $type;
        $this->support = $support;
        $this->artists = $artists;
        $this->genres = $genres;
        $this->tracks = $tracks;
    }

    public $name;
    private $cover;
    private $year;
    private $type;
    private $support;
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

    public function getType() {
        return $this->type;
    }

    public function getSupport() {
        return $this->support;
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