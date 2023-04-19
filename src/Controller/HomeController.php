<?php

namespace App\Controller;

use App\Repository\PicturesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

   public function index(): Response
   {
       $portfolios = array(
                "/image/portfolio/portfolio1.jpg",
                "/image/portfolio/portfolio2.jpg",
                "/image/portfolio/portfolio3.jpg",
                "/image/portfolio/portfolio4.jpg",
       );

     
       return $this->render('view_index.twig',["portfolios"=>$portfolios]);
   }

}