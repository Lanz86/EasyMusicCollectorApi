<?php


namespace App\Controller;


use App\DTOs\AlbumInputDTO;
use App\DTOs\PagedResultDTO;
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

class AlbumController extends AbstractController
{
    private $_albumService;
    public function __construct(AlbumService $albumService)
    {
        $this->_albumService = $albumService;
    }

    public function toPagedResponse(PagedResultDTO $data)
    {
        $first = null;
        $last = null;
        $prev = null;
        $next = null;

        if($data->getPageNumb() > 1)
        {
            $first = '<?'.$this->generateUrl('get_paged_album', ["_page" => "1", "_limit" => "10"], UrlGeneratorInterface::ABSOLUTE_URL).'>; rel="first"';
        }
       //$links = '<?'.$this->generateUrl('get_paged_album', ["_page" => "1", "_limit" => "10"], UrlGeneratorInterface::ABSOLUTE_URL).'>; rel="first", <http://localhost:3000/albums?_page=1&_limit=10>; rel="prev", <http://localhost:3000/albums?_page=3&_limit=10>; rel="next", <http://localhost:3000/albums?_page=30&_limit=10>; rel="last"';
       return $this->json($data, 200, ["Link" => $first]);
    }

    /**
     * @Route("/albums/", name="get_paged_album", methods={"GET"})
     */
    public function getPagedAlbums(Request $request) : JsonResponse
    {
        $page = $request->get('_page');//, ?int $pageElement
        $limit = $request->attributes->get('_limit');
        return $this->toPagedResponse($this->_albumService->getPagedAlbums($page, $limit));
    }

    /**
     * @Route("/albums/", name="add_album", methods={"POST"})
     */
    function addAlbum(Request $request)
    {
        $data = json_decode($request->getContent(), true);
        $dtos = new AlbumInputDTO($data);
    }

    /**
     * @Route("/albums/{id}", name="update_album", methods={"PUT"})
     */
    function update($id, Request $request) {
        $this->_albumService->update($id, json_decode($request->getContent(), true));
    }
}