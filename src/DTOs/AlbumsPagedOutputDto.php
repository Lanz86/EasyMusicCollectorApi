<?php


namespace App\DTOs;

use Symfony\Component\Serializer\Annotation\MaxDepth;


class AlbumsPagedOutputDto
{
    public function __construct($id, $name, $artists, $year, $generes, $type, $support)
    {
        $this->id = $id;
        $this->name = $name;
        $this->artists = $artists;
        $this->year = $year;
        $this->generes = $generes;
        $this->type = $type;
        $this->support = $support;
    }

    private $id;
    private $name;
    private $artists;
    private $year;
    private $generes;
    private $type;
    private $support;


    public function getName(): string {
        return $this->name;
    }

    public function getArtists() {
        return $this->artists;
    }

    public function getYear(): ?int {
        return $this->year;
    }

    public function getGeneres() {
        return $this->generes;
    }

    public function getType() : ?int {
        return $this->type;
    }

    public function getSupport() : ?int {
        return $this->support;
    }

    public function getId() : int {
        return $this->id;
    }
}