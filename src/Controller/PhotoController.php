<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class PhotoController extends AbstractController
{

   public function index(Request $request): Response
   {

        return $this->render('view_photo.twig', ["categorie" => "gala", "dossier"=>"2022"]);
   }

   public function dossier(Request $request,EntityManagerInterface $entityManager, $categorie, $dossier): Response
   {
        
        require ("C:\wamp64\www\studioSite\src\Entity\CategorieManager.php");
        $nbPhotos = NbPhotos($product, $categorie, $dossier);
        return $this->render('view_photo.twig', ["categorie" => $categorie, "dossier"=>$dossier, "nbPhotos"=> $nbPhotos]);
   }

   public function categorie(EntityManagerInterface $entityManager, $categorie): Response
   {
        require ("C:\wamp64\www\studioSite\src\Entity\CategorieManager.php");  
        return $this->render('view_categories_pool.twig', ["categories" => $categorieTab, "categorieactuel"=> $categorie]);
   } 
}