<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\UtilisateurRepository;

class UtilisateurController extends AbstractController
{
    #[Route('/utilisateur', name: 'app_utilisateur')]
    public function index(): Response
    {
        return $this->render('utilisateur/index.html.twig', [
            'controller_name' => 'UtilisateurController',
        ]);
    }
    #[Route('/showUtilisateur', name: 'show_utilisateur')]
    public function showUtilisateur(UtilisateurRepository $utilisateurRepository): Response
    {
        $utilisateur = $utilisateurRepository->findAll();
        return $this->render('Utilisateur/utilisateur.html.twig', [
            'utilisateur' => $utilisateur
        ]);
    }
}
