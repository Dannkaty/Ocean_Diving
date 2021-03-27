<?php
// src/Controller/pageController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use App\Repository\ArticleRepository;
// use Symfony\Component\Form\Extension\Core\Type\TextType;

class  ArticleController extends AbstractController
    {   
        /**
         * @Route("/articles/{category}",name="articles")
         */  
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
        /**
         * @Route("/article/{id}",name="category")
         */ 
        public function article($id){
            $repo = $this->getDoctrine()->getRepository(Article::class);

            $article = $repo->find($id);
            return $this->render('page/article.html.twig', [
                'article' => $article,
                ]);          
    }   
}
  
          
