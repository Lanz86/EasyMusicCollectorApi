<?php


namespace App\Service;


use App\DTOs\ArtistOutputDTO;
use App\Entity\Artist;
use App\Repository\ArtistRepository;
use AutoMapperPlus\AutoMapperInterface;

class ArtistService
{
    private $_artistRepository;
    private $_mapper;
    public function __construct(ArtistRepository $artistRepository, AutoMapperInterface $mapper)
    {
        $this->_artistRepository = $artistRepository;
        $this->_mapper = $mapper;
    }

    public function getAllArtists() {
        $artists = $this->_artistRepository->findAll();
        $artistsDto = $this->_mapper->mapMultiple($artists, ArtistOutputDTO::class);
        return $artistsDto;
    }

    public function getById(int $id) {
        return $this->_artistRepository->findOneBy(['id' => $id]);
    }

    public function createArtist($name)
    {
        $artist = new Artist();
        $artist->setName($name);

        $this->_artistRepository->save($artist);
    }

    public function updateArtist(int $id, string $name)
    {
        $artist = $this->_artistRepository->findOneBy(['id' => $id]);

        if($artist !== null) {
            $artist->setName($name);
            $this->_artistRepository->save($artist);
        }
    }

    public function deleteArtist(int $id) {
        $artist = $this->getById($id);

        if($artist !== null) {
            $this->_artistRepository->delete($artist);
        }
    }
}