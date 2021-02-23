<?php
// src/Controller/pageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Article;
use App\Repository\ArticleRepository;

class  ArticleController extends AbstractController
{
    public function articles(ArticleRepository $repo)
    {
       
        $articles = $repo->findAll();
        
        return $this->render('page/page1.html.twig', [
            'controller_name' => 'page_page1',
            'articles' => $articles
        ]);
       
    } 
        public function article($id){
            $repo = $this->getDoctrine()->getRepository(Article::class);

            $article = $repo->find($id);

            return $this->render('page/page_page2.html.twig', [
                    'article' => $article,
               
        ]);
    }

}

class  HomeController extends AbstractController
{
    public function home(ArticleRepository $repo)
    {
       
        $articles = $repo->findAll();
        
        return $this->render('page/page1.html.twig', [
            'controller_name' => 'page_page1',
            'articles' => $articles
        ]);
       
    } 
        public function article($id){
            $repo = $this->getDoctrine()->getRepository(Article::class);

            $article = $repo->find($id);

            return $this->render('page/page_page2.html.twig', [
                    'article' => $article,
               
        ]);
    }

}
          




