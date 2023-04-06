<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class CategorieController extends AbstractController
{

   public function index(EntityManagerInterface $entityManager, Request $request): Response
   {
      require ("C:\wamp64\www\studioSite\src\Entity\CategorieManager.php");    
      return $this->render('new_categorie.twig',['categories' =>$categorieTab]);
   }

   public function add(EntityManagerInterface $entityManager, Request $request): Response
   {
      require ("C:\wamp64\www\studioSite\src\Entity\CategorieManager.php");    
      return $this->render('view_admin.twig', ['categories' =>$categorieTab]);
   }


}