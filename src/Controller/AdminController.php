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

        $categories =  [['GALA','2023','2022','2020'],['JDC','2023','2022','2020','2017','2016','2015','2003'],['UniTech\'Days','2022','2020','2017','2016']];
        return $this->render('view_admin.twig', ['categories' =>$categorieTab]);
   }

   public function portfolio(EntityManagerInterface $entityManager): Response
   {
        return $this->render('portfolio.twig');
   }

}