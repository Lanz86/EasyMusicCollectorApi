<?php


namespace App\Service;


use App\DTOs\GenreInputDTO;
use App\DTOs\GenreOutputDTO;
use App\Entity\Genere;
use App\Repository\GenereRepository;
use AutoMapperPlus\AutoMapperInterface;

class GenreService
{
    private $_genreRepository;
    private $_mapper;

    public function __construct(GenereRepository $genreRepository, AutoMapperInterface $mapper)
    {
        $this->_genreRepository = $genreRepository;
        $this->_mapper = $mapper;
    }

    public function getAllGenres()
    {
        $genresResults = $this->_genreRepository->findAll();
        $genresDtos = $albums = $this->_mapper->mapMultiple($genresResults, GenreOutputDTO::class);
        return $genresDtos;
    }

    public function createGenre(GenreInputDTO $genre) {
        $genreEntity = new Genere();
        $genreEntity->setName($genre->name);

        $this->_genreRepository->save($genreEntity);

    }

    public function updateGenre($id, GenreInputDTO $genre) {
        $genreEntity = $this->_genreRepository->find($id);
        if($genreEntity !== null) {
            $genreEntity->setName($genre->name);

            $this->_genreRepository->save($genreEntity);
        }
    }

    public function deleteGenre($id) {
        $genreEntity = $this->_genreRepository->find($id);
        if($genreEntity !== null) {
            $this->_genreRepository->deleteGenre($genreEntity);
        }
    }

}