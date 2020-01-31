<?php

namespace App\Controller;

use App\Repository\PicturesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     * @param PicturesRepository $picturesRepository
     * @return Response
     */
    public function index(PicturesRepository $picturesRepository)
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'A ma mode !',
            'pictures' => $picturesRepository->findAll(),
        ]);
    }
}
