<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Category;
use App\Entity\Product;
use App\Form\ProductType;
use App\Form\SearchForm;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
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
        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchForm::class, $data);
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
    public function reserver(Product $product): Response
    {

        return $this->render('product_front/reservation.html.twig', [
            'product' => $product ,
        ]);
    }

}
