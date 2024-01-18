<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\PersonneRepository;
use App\Security\UserProvider;

class ConnexionController extends AbstractController
{
    #[Route('/connexion', 'connexion.index',methods:['GET'])]
    public function index(PersonneRepository $personneRepository): Response
    {
        $leUser = new UserProvider($personneRepository);
        $leUser->loadUserByIdentifier('test@test1.fr');
        //$leUser->verifyPersonne($personneRepository);

        //dd($leUser);

        return $this->render('connexion/index.html.twig', ['controller_name' => 'ConnexionController',]);
    }
}
