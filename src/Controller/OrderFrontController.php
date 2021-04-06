<?php


namespace App\Controller;


use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/orders")
 */

class OrderFrontController extends AbstractController
{
    /**
     * @Route("/", name="orderlistFront")
     */
    public function orderListAction()
    {
        if(!$this->getUser()){
                return $this->redirectToRoute('home');
        }

        return $this->render('product_front/orders.html.twig', array(
            'orders' => $this->getUser()->getOrders(),
        ));
    }



}