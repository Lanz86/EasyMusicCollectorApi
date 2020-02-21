<?php


namespace App\Service;


use App\DTOs\AlbumCreateInputDTO;
use App\DTOs\AlbumOutputDTO;
use App\DTOs\AlbumUpdateInputDTO;
use App\DTOs\ArtistDTO;
use App\DTOs\AlbumsPagedOutputDto;
use App\DTOs\PageResultOutputDTO;
use App\Entity\Album;
use App\Repository\AlbumRepository;
use App\Repository\ArtistRepository;
use App\Repository\GenereRepository;
use AutoMapperPlus\AutoMapperInterface;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpKernel\Log\Logger;

class AlbumService
{
    private $_mapper;
    public $_albumRepository;
    private $_artistRepository;
    private $_genreRepository;
    private $_logger;
    public function __construct(AlbumRepository $albumRepository,
                                ArtistRepository $artistRepository,
                                GenereRepository $genereRepository,
                                AutoMapperInterface $mapper,
                                LoggerInterface   $logger)
    {
        $this->_albumRepository = $albumRepository;
        $this->_artistRepository = $artistRepository;
        $this->_genreRepository = $genereRepository;
        $this->_mapper = $mapper;
        $this->_logger = $logger;
    }

    public function getPagedAlbums(?int $page, ?int $limit) : PageResultOutputDTO
    {
        $albumsPaging = $this->_albumRepository->getPagedAlbums($page, $limit);
        $numberOfElement = $albumsPaging->count();
        $albums = $this->_mapper->mapMultiple($albumsPaging, AlbumsPagedOutputDto::class);

        return new PageResultOutputDTO($page, $limit, $numberOfElement, $albums);
    }

    public function getAlbum($id) {
        $album = $this->_albumRepository->findOneBy(['id' => $id]);
        return $this->_mapper->map($album, AlbumOutputDTO::class);
    }

    public function createAlbum(AlbumCreateInputDTO $albumCreateInputDTO)
    {
        $album = new Album();
        $album->setName($albumCreateInputDTO->name);
        $album->setYear($albumCreateInputDTO->year);
        $album->setSupport($albumCreateInputDTO->support);
        $album->setType($albumCreateInputDTO->type);

        if($albumCreateInputDTO->artists !== null && count($albumCreateInputDTO->artists) > 0)
        {
            $artists = $this->_artistRepository->getByIds(array_values($albumCreateInputDTO->artists));
            foreach ($artists as $artist) {
                $album->addArtist($artist);
            }
        }

        if($albumCreateInputDTO->generes !== null && count($albumCreateInputDTO->generes) > 0) {
            $genres = $this->_genreRepository->getByIds(array_values($albumCreateInputDTO->generes));
            foreach ($genres as $genre) {
                $album->addGenere($genre);
            }
        }

        $this->save($album);
    }

    public function updateAlbum($id, AlbumUpdateInputDTO $albumUpdateInputDTO) {
        $this->_logger->debug('Start');
        $album = $this->_albumRepository->findOneBy(['id' => $id]);

        if($album !== null) {
            $album->setName($albumUpdateInputDTO->name);
            $album->setYear($albumUpdateInputDTO->year);
            $album->setSupport($albumUpdateInputDTO->support);
            $album->setType($albumUpdateInputDTO->type);

            /*
             * Cerco tra gli artisti se presenti nell
             */
            foreach ($album->getArtists() as $artist) {
                $index = array_search($artist->getId(), $albumUpdateInputDTO->artists);
                if($index === false) {
                    $this->_logger->debug('Remove artist'.$artist->getId());
                    $album->removeArtist($artist);
                } else {
                    //Rimuovo l'elemento
                    $this->_logger->debug($artist->getId().' present in array '.$index);
                    unset($albumUpdateInputDTO->artists[$index]);
                }
            }

            $artistsToAdd = $this->_artistRepository->findBy(['id' => array_values($albumUpdateInputDTO->artists)]);
            if($artistsToAdd !== null && count($artistsToAdd)) {
                $this->_logger->debug('Add ' . count($artistsToAdd) . ' elements');
                foreach ($artistsToAdd as $artistToAdd) {
                    $this->_logger->debug('Adding artist ' . $artistToAdd->getId());
                    $album->addArtist($artistToAdd);
                }
            }

            /*
             * Cerco tra gli artisti se presenti nell
             */
            foreach ($album->getGeneres() as $genre) {
                $index = array_search($genre->getId(), $albumUpdateInputDTO->generes);
                if($index === false) {
                    $this->_logger->debug('Remove genre'.$genre->getId());
                    $album->removeGenere($genre);
                } else {
                    //Rimuovo l'elemento
                    $this->_logger->debug($genre->getId().' present in array '.$index);
                    unset($albumUpdateInputDTO->generes[$index]);
                }
            }

            $genresToAdd = $this->_genreRepository->findBy(['id' => array_values($albumUpdateInputDTO->generes)]);
            if($genresToAdd !== null && count($genresToAdd)) {
                $this->_logger->debug('Add ' . count($genresToAdd) . ' elements');
                foreach ($genresToAdd as $genreToAdd) {
                    $this->_logger->debug('Adding artist ' . $genreToAdd->getId());
                    $album->addGenere($genreToAdd);
                }
            }

            $this->save($album);
        }
    }

    public function deleteAlbum($id) {
        $album = $this->_albumRepository->findOneBy(['id' => $id]);
        if($album !== null) {
            $this->_albumRepository->delete($album);
        }
    }

    private function save($data) {
        return $this->_albumRepository->save($data);
    }
}