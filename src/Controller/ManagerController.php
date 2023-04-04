<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ManagerController extends AbstractController
{

   public function index(Request $request): Response
   {
    require("C:\wamp64\www\studioSite\src\Entity\ManagerEntity.php");
    return $this->render('blank.twig');
   }

   
   public function addDossier($catego): Response
   {
    return $this->render('new_dossier.twig',['catego'=>$catego]);
   }

}