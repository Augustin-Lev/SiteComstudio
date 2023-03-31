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

     return $this->render('AddImage.twig');
   }

}