<?php


namespace App\Service;


use App\DTOs\AlbumOutputDTO;
use App\DTOs\ArtistDTO;
use App\DTOs\PagedResultDTO;
use App\Repository\AlbumRepository;
use App\Repository\ArtistRepository;

class AlbumService
{
    public $_albumRepository;
    private $_artistRepository;
    public function __construct(AlbumRepository $albumRepository, ArtistRepository $artistRepository)
    {
        $this->_albumRepository = $albumRepository;
        $this->_artistRepository = $artistRepository;
    }

    public function getPagedAlbums(?int $page, ?int $limit)
    {

        $pagedElements = $this->_albumRepository->getPagedAlbums($page, $limit);

        $numberOfElement = $pagedElements->count();
        $albums = [];
        foreach ($pagedElements as $value) {
            //var_dump($value['name']);
            $artists = [];

            foreach ($value->getArtists() as $artist) {
                $artists[] = new ArtistDTO($artist->getName());
            }

            $albums[] = new AlbumOutputDTO($value->getName(), $value->getCover(), $value->getYear(), $artists);
        }

        return new PagedResultDTO($page, $limit, $numberOfElement, $albums);
    }

    public function update($id, $data) {
        $album = $this->_albumRepository->findOneBy(['id' => $id]);

        if($album !== null)
        {
            $album->setName($data['name']);
            $artists = $album->getArtists();
            $updArtists = $data['artists'];

            if(count($updArtists) == 0 && count($artists) == 0) {
                $album->removeArtist($artists);
            } else {
                $artistsOperation = [];
              foreach ($updArtists as $updArtist)
              {
                $artistsOperation[$updArtist['id']] = $updArtist['operation'];
              }
              $artistsEntity = $this->_artistRepository->getByIds(array_keys($artistsOperation));

                foreach ($artistsEntity as $artistE) {
                    if($artistsOperation[$artistE->getId()] == "1")
                        $album->addArtist($artistE);
                    else
                        $album->removeArtist($artistE);
                }
            }
        }
        $this->save($album);
    }

    public function save($data)
    {
        return $this->_albumRepository->save($data);
    }
}