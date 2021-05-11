<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Symfony\Component\HttpFoundation\Session\SessionInterface;
// use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
// use Symfony\Component\HttpFoundation\JsonResponse;
use App\Entity\Article;

// use Symfony\Component\Form\Extension\Core\Type\TextType;

class  ArticleController extends AbstractController
    {  
        /**
     * @Route("/articles", name="article")
     */
    public function index(SessionInterface $session, ArticleRepository $articleRepository): response
    
    {
        $bdd_articles = $this->getDoctrine()
        ->getRepository(Articles::class)
        ->findAll();
        return $this->render('articles/index.html.twig', [
            'article'=> $bdd_article
        ]);
    }
    /**
     * @Route("/article/{id}", name="article")
     */
    public function detail(int $id):Response
    {
        
        $article = $this->getDoctrine()
        ->getRepository(Articles::class)
            ->find($id) ;

            return $this->render('articles/index.html.twig', [
                'article' => $article
               
              ]);
    }

} 
//         /**
//          * @Route("/articles/{category}",name="articles")
//          */  
//         public function articles(ArticleRepository $repository, String $category)
//         {
//             $articles = $repository->findBy(
//                 [
//                     "category" => $category
//                 ]
//             );
//             return $this->render('articles/index.html.twig', [
//                 'controller_name' => '1',
//                 'articles' => $articles
//             ]);
//         }
//         /**
//          * @Route("/article/{id}",name="category")
//          */ 
//         public function article($id){
//             $repository = $this->getDoctrine()->getRepository(Article::class);

//             $article = $repository->find($id);
//             return $this->render('articles/index.html.twig', [
//                 'article' => $article,
//                 ]);          
//     }   
// }
  
          
