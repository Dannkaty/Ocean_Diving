<?php

// src/Controller/pageController.php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class  HomeController extends AbstractController


// controleur de la page d'acceuil//
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
    

// controleur de la page compte//

     /**
     * @Route("/compte",name="compte")
     */  
     public function compte(): Response
     {  
         return $this->render('page/compte.html.twig', [
         'controller_name' => 'HomeController', 

    ]);

    } 

// controleur de la page contact//

     /**
     * @Route("/contact",name="contact")
     */ 
    public function contact(): Response
    {   
         return $this->render("page/contact.html.twig", [
            'controller_name' => 'HomeController', 
    ]);

    }

// controleur de la page panier//

     /**
     * @Route("/panier",name="panier")
     */ 
    public function panier(): Response
    {   
         return $this->render("page/panier.html.twig", [
            'controller_name' => 'HomeController', 
    ]);

    }

    // controleur de la page conditionGenerales//

    
    /**
     * @Route("/conditions",name="conditions")
     */  
    public function conditions(): Response
    {   
         return $this->render("page/conditions.html.twig", [
    
    ]);

    } 

}   