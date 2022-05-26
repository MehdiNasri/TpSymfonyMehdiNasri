<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\OrganismeRepository;
use App\Repository\FormationRepository;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(OrganismeRepository $organismeRepository,FormationRepository $formationRepository): Response
    {
        return $this->render('accueil/index.html.twig', [
            'CountOrganisme' => count($organismeRepository->findAll()),
            'CountFormation' => count($formationRepository->findAll()),
        ]);
    }
}
