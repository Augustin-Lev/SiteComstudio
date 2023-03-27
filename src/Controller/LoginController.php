<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\LoginType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{

   public function index(Request $request): Response
   {

      // $login = new LoginType();

      // $form = $this->createForm( LoginType::class, $login);
      // ,['form'=>$form]
      
       return $this->render('view_login.php.twig');
   }

}