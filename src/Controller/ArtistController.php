<?php


namespace App\Controller;


use App\Service\ArtistService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtistController extends AbstractController
{
    private $_artistService;

    public function __construct(ArtistService $artistService)
    {
        $this->_artistService = $artistService;
    }

    /**
     * @Route("/artists/", name="get_artist", methods={"GET"})
     */
    public function getAll() : JsonResponse
    {
        return $this->json($this->_artistService->getAll(), Response::HTTP_OK);
    }

    /**
     * @Route("/artists/{id}", name="get_artist_by_id", methods={"GET"})
     * @param int $id
     * @return JsonResponse
     */
    public function get($id) : JsonResponse
    {
        return $this->json($this->_artistService->getById($id), Response::HTTP_OK);
    }

    /**
     * @Route("/artists/", name="add_artist", methods={"POST"})
     */
    public function  createArtist(Request $request) : JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $this->_artistService->createArtist($data['name']);
    }

    /**
     * @Route("/artists/{id}", name="add_artist", methods={"PUT"})
     */
    public function  updateArtist(Request $request, int $id)
    {
        $data = json_decode($request->getContent(), true);
        $this->_artistService->updateArtist($id, $data['name']);
    }

    /**
     * @Route("/artists/{id}", name="add_artist", methods={"DELETE"})
     */
    public function  deleteArtist(int $id)
    {
        $this->_artistService->deleteArtist($id);
    }
}