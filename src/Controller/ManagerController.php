<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class ManagerController extends AbstractController
{

   public function index(EntityManagerInterface $entityManager, Request $request): Response
   {
      require("C:\wamp64\www\studioSite\src\Entity\CategorieManager.php");
      require("C:\wamp64\www\studioSite\src\Entity\ManagerEntity.php");
      return $this->render('blank.twig');
   }

   
   public function addDossier($catego): Response
   {
    return $this->render('new_dossier.twig',['catego'=>$catego]);
   }

}