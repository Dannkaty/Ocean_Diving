<?php
// src/Controller/pageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;
use App\Repository\ArticleRepository;

class Page1 extends AbstractController
{
    public function articles(ArticleRepository $repo)
    {
       
        $articles = $repo->findAll();
        
        return $this->render('page/Page1.html.twig', [
            'controller_name' => 'Page1',
            'articles' => $articles
        ]);
       
    } 
        public function article($id){
            $repo = $this->getDoctrine()->getRepository(Article::class);

            $article = $repo->find($id);

            return $this->render('page/Page2.html.twig', [
                    'article' => $article,
               
        ]);
    }

}
          




