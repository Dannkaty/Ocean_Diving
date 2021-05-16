<?php

namespace App\Controller;

use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Article;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class  ArticleController extends AbstractController
{  
     /**
         * @Route("/articles/{category}",name="articlesCategory")
         */  
        public function articles(ArticleRepository $repository, $category)
        {
            $article = $repository->findBy(
                [
                    "category" => $category
                ]
            );
            return $this->render('articles/index.html.twig', [
                'controller_name' => '1',
                'articles' => $article
            ]);
        }
        /**
         * @Route("/article/{id}",name="descriptionArticle")
         */ 
        public function article($id)
        {
            $repository = $this->getDoctrine()->getRepository(Article::class);

            $article = $repository->find($id);
            return $this->render('page/article.html.twig', [
                'article' => $article,
                ]);          
        }   
}
  
          
