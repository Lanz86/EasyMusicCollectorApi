<?php


namespace App\Controller;


use App\DTOs\PageResultOutputDTO;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

abstract class BaseController extends AbstractController
{
    public function pagedJson(PageResultOutputDTO $data, int $status = 200) : JsonResponse
    {
        $first = null;
        $last = null;
        $prev = null;
        $next = null;

        if($data->getPage() > 1)
        {
            $first = '<?'.$this->generateUrl('get_paged_album', ["_page" => "1", "_limit" => "10"], UrlGeneratorInterface::ABSOLUTE_URL).'>; rel="first"';
        }

        //$links = '<?'.$this->generateUrl('get_paged_album', ["_page" => "1", "_limit" => "10"], UrlGeneratorInterface::ABSOLUTE_URL).'>; rel="first", <http://localhost:3000/albums?_page=1&_limit=10>; rel="prev", <http://localhost:3000/albums?_page=3&_limit=10>; rel="next", <http://localhost:3000/albums?_page=30&_limit=10>; rel="last"';
        return $this->json($data, $status, ["Link" => $first]);
    }

    public function jsonOk($data, array $headers = [], array $context = []) {
        return $this->json($data, Response::HTTP_OK, $headers, $context);
    }

    public function jsonCreated($data, array $headers = [], array $context = []) {
        return $this->json($data, Response::HTTP_CREATED, $headers, $context);
    }

    public function jsonNotFound($data = null, array $headers = [], array $context = []) {
        return $this->json($data, Response::HTTP_NOT_FOUND, $headers, $context);
    }

    public function jsonNoContent($data = null, array $headers = [], array $context = []) {
        return $this->json($data, Response::HTTP_NO_CONTENT, $headers, $context);
    }

    public function JsonResponse($data) : Response
    {
        $response = new Response( $this->container->get('serializer')->serialize($data, 'json'));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}