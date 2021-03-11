<?php
// src/Controller/pageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  ArticleController extends AbstractController
    {
        public function articles(ArticleRepository $repo, String $category)
        {
       
            $articles = $repo->findBy(
                [
                    "category" => $category
                ]
            );
        
            return $this->render('page/articles.html.twig', [
                'controller_name' => '1',
                'articles' => $articles
            ]);
       
        } 
        public function article($id){
            $repo = $this->getDoctrine()->getRepository(Article::class);

            $article = $repo->find($id);

            return $this->render('page/article.html.twig', [
                'article' => $article,
                ]);
               
    }   


}
  
          
