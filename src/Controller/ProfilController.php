<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\ClientRepository;
use App\Repository\DroitRepository;
use App\Repository\PersonneRepository;
use App\Repository\CommandeRepository;

class ProfilController extends AbstractController
{
    #[Route('/profil', 'profil.index',methods:['GET','POST'])]
    public function index(ClientRepository $clientRepository, DroitRepository $droitRepository, PersonneRepository $personneRepository,
    CommandeRepository $commandeRepository, Request $request): Response
    {
        $clientr = $clientRepository->find($this->getUSer()->getUsername());

        $personne = $personneRepository->find($this->getUSer()->getUsernamee());

        $numDroit = $personne->getNumdroit()->getNumDroit();

        $droit = new Droit();

        $droit = $droitRepository->findOneBy(['numdroit'=>$numDroit]);
        $personne->setNumdroit($droit);

        $lesCommandes= $commandeRepository->findBy(['login'=>$this->getUSer()->getUsername()]);

        $message="";

        if($clientr ==null){
            $client = new Client();

            $client->setLogin($personne);
        }else{
            $client=$clientr;
        }

        if($request->request->get('valider')){
            $personne->setLogin($request->request->get('login'));
            $personne->setMdp($request->request->get('mdp'));
            $client->setNom($request->request->get('nom'));
            $client->setPrenom($request->request->get('prenom'));
            $client->setRue($request->request->get('rue'));
            $client->setCp($request->request->get('cp'));
            $client->setVille($request->request->get('ville'));
            $client->setTel($request->request->get('tel'));
            $client->setEmail($request->request->get('email'));
            $client->setLogin($personne);

            if($clientr !=null) $clientRepository->remove($client, true);

            $personneRepository->remove($personne, true);
            $personneRepository->save($personne,true);
            $clientRepository->save($client,true);
            $message='les modifications sont correctement enregistrées !';
        }

        return $this->render('profil/index.html.twig', ['client'=>$client,'lesCommandes'=>$lesCommandes,'message'=>$message]);
    }
}
