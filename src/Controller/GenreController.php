<?php


namespace App\Controller;


use App\DTOs\GenreInputDTO;
use App\Service\GenreService;
use Symfony\Component\Routing\Annotation\Route;

class GenreController extends BaseController
{
    private $_genreService;

    public function __construct(GenreService $genreService)
    {
        $this->_genreService = $genreService;
    }

    /**
     * @Route("/genres/", name="get_genres", methods={"GET"})
     */
    public function getAllGenres() {
        return $this->jsonOk($this->_genreService->getAllGenres());
    }
}