<?php


namespace App\Controller;


use App\Model\ProvaDto;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;



class ProvaController extends BaseController
{
    //private $_serializer;
    public function __construct(SerializerInterface $serializer)
    {
        //$this->_serializer = $serializer;
    }

    /**
     * @Route("/authors/", name="add_author", methods={"GET"})
     */
    public function GetAll() : JsonResponse
    {
        $prova = new ProvaDto();
        $prova->name = 'CIAO';

        return $this->json($prova, Response::HTTP_OK);
    }
}