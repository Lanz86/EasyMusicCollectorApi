<?php


namespace App\Controller;


use App\DTOs\AlbumCreateInputDTO;
use App\DTOs\AlbumInputDTO;
use App\DTOs\AlbumUpdateInputDTO;
use App\DTOs\PageResultOutputDTO;
use App\DTOs\PageResultInputDTO;
use App\DTOs\ProvaDTO;
use App\Entity\Album;
use App\Entity\Artist;
use App\Repository\AlbumRepository;
use App\Service\AlbumService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class AlbumController extends BaseController
{
    private AlbumService $_albumService;
    public function __construct(AlbumService $albumService)
    {
        $this->_albumService = $albumService;
    }

    /**
     * @Route("/albums", name="get_paged_album", methods={"GET"})
     * @param PageResultInputDTO $pageResultInputDTO
     * @return JsonResponse
     */
    public function getPagedAlbums(PageResultInputDTO $pageResultInputDTO)
    {
        $page = $pageResultInputDTO->getPage();
        $limit = $pageResultInputDTO->getLimit();
        return $this->pagedJson($this->_albumService->getPagedAlbums($page, $limit));
    }

    /**
     * @Route("/albums/", name="add_album", methods={"POST"})
     * @param AlbumCreateInputDTO $album
     */
    function createAlbum(AlbumCreateInputDTO $album)
    {
        $this->_albumService->createAlbum($album);
        return $this->jsonCreated(['success' => 'Created']);
    }

    /**
     * @Route("/albums/{id}", name="update_album", methods={"PUT"})
     */
    function updateAlbum($id, AlbumUpdateInputDTO $albumUpdateInputDTO) {
        $this->_albumService->updateAlbum($id, $albumUpdateInputDTO);
        return $this->jsonOk(["success" => "OK"]);
    }

    /**
     * @Route("/albums/{id}", name="update_album", methods={"DELETE"})
     */
    function deleteAlbum($id) {
        $this->_albumService->deleteAlbum($id);
        return $this->jsonNoContent([]);
    }
}