<?php
// src/Controller/pageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  HomeController extends AbstractController

{
    public function home()
    {
       
        return $this->render('page/home.html.twig', [
        'controller_name' => 'page_page/home',
     ]);
   
    } 

}