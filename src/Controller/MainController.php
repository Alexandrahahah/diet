<?php

namespace App\Controller;

use App\Repository\MusiqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function listAll(MusiqueRepository $repository): Response
    {
       $musiques = $repository->findAll();
        return $this->render('main/index.html.twig', [
            
        ]);
    }

    #[Route('/consultTarifs', name: 'consultTarifs')]
    public function consultation(MusiqueRepository $repository): Response
    {
       $musiques = $repository->findAll();
        return $this->render('main/consultTarifs.html.twig', [
           
        ]);
    }

    #[Route('/rdv', name: 'rdv')]
    public function rdv(MusiqueRepository $repository): Response
    {
       $musiques = $repository->findAll();
        return $this->render('main/rdv.html.twig', [
           
        ]);
    }

    #[Route('/contact', name: 'contact')]
    public function contact(MusiqueRepository $repository): Response
    {
       $musiques = $repository->findAll();
        return $this->render('main/contact.html.twig', [
           
        ]);
    }

}
