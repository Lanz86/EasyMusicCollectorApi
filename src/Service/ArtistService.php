<?php


namespace App\Service;


use App\Entity\Artist;
use App\Repository\ArtistRepository;

class ArtistService
{
    private $_artistRepository;

    public function __construct(ArtistRepository $artistRepository)
    {
        $this->_artistRepository = $artistRepository;
    }

    public function getAll() {
        return $this->_artistRepository->findAll();
    }

    public function getById(int $id) {
        return $this->_artistRepository->findOneBy(['id' => $id]);
    }

    public function getByIds(array $ids) {
        return $this->_artistRepository->getByIds($ids);
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