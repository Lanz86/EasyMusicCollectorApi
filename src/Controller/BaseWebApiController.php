<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\SerializerInterface;

class BaseWebApiController extends AbstractController
{
    private $_serializer;
    public function __construct(SerializerInterface $serializer)
    {
        $this->_serializer =
        var_dump($serializer);
    }

    public function JsonResponse($data) : Response
    {
        $response = new Response( $this->container->get('serializer')->serialize($data, 'json'));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
}