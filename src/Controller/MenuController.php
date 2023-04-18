<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


class MenuController extends AbstractController
{

   public function index(Request $request, EntityManagerInterface $entityManager): Response
   {
        require ("C:\wamp64\www\studioSite\src\Entity\CategorieManager.php");
        // var_dump($categorieTab);
        $categorieTab = categorieTable($product);
        $troisDerniers = TroisDernier($product);
        return $this->render('view_menu.twig',['categories'=>$categorieTab, 'troisDerniers' =>$troisDerniers ]);
   }

}