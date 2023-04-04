<?php

namespace App\Controller;

use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Images;
use App\Repository\ImagesRepository;   
use Doctrine\ORM\EntityManagerInterface;

use App\src\Repository\ImagesRepositorys;

class UploadController extends AbstractController
{

   public function index(EntityManagerInterface $entityManager, Request $request)
   {
     require("C:\wamp64\www\studioSite\src\Entity\Upload.php");
     return $this->render('blank.twig');
   }

}