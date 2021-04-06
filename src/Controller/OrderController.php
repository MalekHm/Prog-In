<?php


namespace App\Controller;


use App\Entity\Order;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/orders")
 */

class OrderController extends AbstractController
{
    /**
     * @Route("/", name="orderlist")
     */

    public function orderListAction()
    {
        $em = $this->getDoctrine()->getManager();
        $commandes = $em->getRepository(Order::class)->findAll();

        return $this->render('product/orders.html.twig', array(
            'orders' => $commandes,
        ));
    }

    /**
     * @Route("/confirme", name="confirme")
     */

    public function confirmeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository(Order::class)->find($id);
        $entityManager = $this->getDoctrine()->getManager();

        $commande -> setStatus('Confirmée');
        $entityManager->persist($commande);
        $entityManager->flush();


        $commandes = $em->getRepository(Order::class)->findAll();

        return $this->render('produit/CommandeBack.html.twig', array(
            'commandes' => $commandes,
        ));
    }
    /**
     * @Route("/livree", name="livree")
     */
    public function livreeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository(Order::class)->find($id);
        $entityManager = $this->getDoctrine()->getManager();

        $commande -> setStatus('Livrée');
        $entityManager->persist($commande);
        $entityManager->flush();


        $commandes = $em->getRepository(Order::class)->findAll();

        return $this->render('produit/CommandeBack.html.twig', array(
            'commandes' => $commandes,
        ));
    }


}