<?php 

namespace App\Controller; 
// (genere par symfony)

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use App\Repository\ArticleRepository;

class CartController extends AbstractController
{
    /** 
     * @Route("/panier", name="panier")
     */
    public function index(SessionInterface $session, ArticleRepository $articleRepository)
    {
        $cart = $session->get('panier', []);

        $cartWithData = [];

        foreach($cart as $id => $quantity)
    {
            $cartWithData[] = [
                'article' => $articleRepository->find($id),
                'quantity' => $quantity
            ];
    }
        $total= 0;
        foreach($cartWithData as $item) 
    // {
    //          $totalItem = $item['article']->getPrice() * $item['quantity'];
    //         $total += $totalItem;
    // }

        return $this->render('cart/index.html.twig', [
            'items' => $cartWithData,
            'total' => $total
        ]);
    }

     /** 
     * @Route("/cart/add/{id}", name="panier_add")
     */
    public function add($id, SessionInterface $session ) 
    {

            $cart = $session->get('cart', []);
            if(!empty($cart[$id]))
        {
            $cart[$id]++;
        }

        else{
        $cart[$id] = 1;
        }
        $session->set('panier', $cart);
        //dump($session->get('cart'));//

        return $this->redirectToRoute("cart");

    }
    /**
     * @route("/cart/remove/{id}", name="panier_remove")
     */
    public function remove($id, SessionInterface $session) 
    {
        $cart = $session->get('panier', []);

        if(!empty($cart[$id])) {
            unset($cart[$id]);
        }

        $session->set('panier', $cart);

        return $this-> redirectToRoute("cart");
    }

// class CartController extends AbstractController
// {
//     /**
//      * @Route("/panier", name="cart_index")
//      */
//     public function index(SessionInterface $session, ArticleRepository $articleRepository)
//     {   
//         $panier = $session->get('panier', []);
//         $panierWithData = [];

//         foreach($panier as $id => $quantity){
//             $panierWithData[] = [
//                 'article' => $articleRepository->find($id),
//                 'quantity' => $quantity
//             ];
//         }
//         $total= 0;

//         foreach($panierWithData as $item) {
//             $totalItem = $item['article']->getPrix() * $item['quantity'];
//             $total += $totalItem;
//         }
    
//         return $this->render('article/index.html.twig', [
//             'items' => $panierWithData,
//             'total' => $total
//         ]);
       
//     }

//      /**
//      * @Route("/panier/ajouter/{id}", name="cart_add")
//      */
//     public function add($id, SessionInterface $session ) 
//     {
        
//         $panier = $session->get('panier', []);
//         if(!empty($panier[$id])) {
//             $panier[$id]++;
//         }
//         else{
//         $panier[$id] = 1;
//         }
//         $session->set('panier', $panier);
//         //dump($session->get('panier'));//
        
//         return $this->redirectToRoute("cart");
       
//     }
//     /**
//      * @route("/panier/remove/{id}", name="cart_remove")
//      */
//     public function remove($id, SessionInterface $session) {
//         $panier = $session->get('panier', []);

//         if(!empty($panier[$id])) {
//             unset($panier[$id]);
//         }
        
//         $session->set('panier', $panier);

//         return $this-> redirectToRoute("cart");
//     }
// }  
}