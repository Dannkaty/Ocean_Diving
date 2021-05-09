<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class  HomeController extends AbstractController
{
    /**
     * @Route("/",name="home")
     */
    public function home(): Response
    {
        return $this->render('page/home.html.twig', [
        'controller_name' => 'HomeController',  
    ]);
    }
     /**
     * @Route("/compte",name="compte")
     */  
     public function compte(): Response
     {  
         return $this->render('page/compte.html.twig', [
         'controller_name' => 'HomeController', 

    ]);
    }
    /**
     * @Route("/conditions",name="conditions")
     */  
    public function conditions(): Response
    {   
         return $this->render("page/conditions.html.twig", [
    
    ]);
    } 

}   