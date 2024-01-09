<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Produits;
use Doctrine\Persistence\ManagerRegistry;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function afficheList(ManagerRegistry $doctrine): Response
    {
        $produitsRepository = $doctrine->getRepository(Produits::class);
        $produits = $produitsRepository->findAll();
        $listeProduit = [];
        foreach ($produits as $produit ){
            $listeProduit[] = array("libelle" => $produit->getLibelle(),"prix"=>$produit->getPrixUnitaireTTC(),"quantite"=>$produit->getQuatiteStock(),"img"=>$produit->getImg());
        }     
        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController','listeProduit' => $listeProduit,
        ]);
    }
}
