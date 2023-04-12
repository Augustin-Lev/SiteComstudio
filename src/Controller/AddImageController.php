<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddImageController extends AbstractController
{

   public function index(Request $request)
   {
    echo '$_POST';
    var_dump($_POST);
   
    return $this->render('AddImage.twig', ['categoriepost'  => $_POST['categorie'], 'dossierpost' => $_POST['dossier']]);
   }

}