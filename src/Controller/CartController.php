<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    /**
     * @Route("/panier", name="cart_index")
     */
    public function index(SessionInterface $session, ProductRepository $productRepository ): Response
    {


            $panier = $session->get('panier' , []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity){
            $panierWithData[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }
        $panierr = $session->get('panierr' , []);
        $panierWithDatar = [];
        foreach ($panierr as $id => $quantity){
            $panierWithDatar[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }
        $total = 0;
        foreach ($panierWithData as $item) {
            if($item['product']->getPromo()!=0){
                $totalItem = $item['product']->getPrice() * $item['quantity']-($item['product']->getPrice() * $item['quantity']*$item['product']->getPromo())/100;
            }
            else{
                $totalItem = $item['product']->getPrice() * $item['quantity'];
            }
            $total += $totalItem;

        }
        $totalr= 0;
        foreach ($panierWithDatar as $itemr) {
            if($itemr['product']->getPromo()!=0){
                $totalrItem = $itemr['product']->getPricer() * $itemr['quantity']-($itemr['product']->getPricer() * $itemr['quantity']*$itemr['product']->getPromo())/100;
            }
            else{
                $totalrItem = $itemr['product']->getPricer() * $itemr['quantity'];
            }
            $totalr += $totalrItem;
        }


            $totalf= $totalr + $total;
        if($totalf==0){
            $this->addFlash('danger', 'votre panier est vide');
            return $this->redirectToRoute('product_front');
        }


        return $this->render('cart/index.html.twig', [
            'items' => $panierWithData,
            'itemsr' => $panierWithDatar,
            'total' => $total,
            'totalr' => $totalr,
            'totalf' => $totalf
        ]);
    }


    /**
     * @Route("/panier/remove/{id}", name="cart_remove")
     */
    public function remove($id, SessionInterface $session) {
        $panier = $session->get('panier', []);
        if(!empty($panier[$id])) {
            unset($panier[$id]);

        }
        $session-> set('panier', $panier);
        return $this->redirectToRoute("cart_index");

    }
    /**
     * @Route("/panier/remover/{id}", name="cart_remover")
     */
    public function remover($id, SessionInterface $session) {
        $panierr = $session->get('panierr', []);
        if(!empty($panierr[$id])) {
            unset($panierr[$id]);

        }
        $session-> set('panierr', $panierr);
        return $this->redirectToRoute("cart_index");

    }



}

