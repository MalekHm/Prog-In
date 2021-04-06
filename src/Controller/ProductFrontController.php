<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Data\SearchDatap;
use App\Entity\Category;
use App\Entity\Product;
use App\Form\ProductType;
use App\Form\SearchForm;
use App\Form\SearchFormp;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductRepository;

/**
 * @Route("/productlist")
 */
class ProductFrontController extends AbstractController
{

    /**
     * @Route("/", name="product_front")
     */
    public function list( Request $request): Response

    {
        $data = new SearchDatap();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchFormp::class, $data);
        $form->handleRequest($request);

        $product=$this->getDoctrine()->getRepository(Product::class)->findSearch($data);
        return $this->render('product_front/list.html.twig', [
            'product' => $product,
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/productreserver/{id}", name="product_reserver")
     */
    public function reserver(Product $product,Request $request, SessionInterface $session): Response
    {

        if ($request->query->get('nbArticle')) {
            $panier = $session-> get('panier' , []);
            $panierr = $session-> get('panierr' , []);
            $total=$request->query->get('nbArticle');
            if(!empty($panier[$product->getId()])) {
                $total= $total+$panier[$product->getId()];
            }
            if(!empty($panierr[$product->getId()])) {
                $total= $total+$panierr[$product->getId()];
            }
            if($total>$product->getQuantity()){
                $this->addFlash('danger', 'Impossible d effectuer cette operation il reste '.$product->getQuantity().' dans le stock');
            }
            else{
                if ($request->query->get('type')=='acheter') {
                    $panier = $session-> get('panier' , []);

                    if(!empty($panier[$product->getId()])) {
                        $panier[$product->getId()]=$panier[$product->getId()]+$request->query->get('nbArticle');
                    } else {
                        $panier[$product->getId()] = $request->query->get('nbArticle');
                    }

                    $session-> set('panier' , $panier);
                    return $this->redirectToRoute("cart_index");
                }
                else{
                    $panierr = $session-> get('panierr' , []);

                    if(!empty($panierr[$product->getId()])) {
                        $panierr[$product->getId()]= $panierr[$product->getId()]+$request->query->get('nbArticle');
                    } else {
                        $panierr[$product->getId()] = $request->query->get('nbArticle');
                    }

                    $session-> set('panierr' , $panierr);
                    return $this->redirectToRoute("cart_index");
                }
            }
        }
        return $this->render('product_front/reservation.html.twig', [
            'product' => $product ,
        ]);
    }

}
