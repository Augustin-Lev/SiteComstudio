<?php

namespace App\Controller;

use App\Repository\PicturesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Dossier;
use App\Repository\DossierRepository;   
use Doctrine\ORM\EntityManagerInterface;

class AdminController extends AbstractController
{

   public function index(EntityManagerInterface $entityManager): Response
   { 
        require ("C:\wamp64\www\studioSite\src\Entity\CategorieManager.php");
        return $this->render('view_admin.twig', ['categories' =>$categorieTab]);
   }

   public function portfolio(EntityManagerInterface $entityManager): Response
   {
        return $this->render('portfolio.twig');
   }

}