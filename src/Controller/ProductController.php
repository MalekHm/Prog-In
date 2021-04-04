<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Image;

/**
 * @Route("/admin/product")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/", name="product_index", methods={"GET"})
     */
    public function index(ProductRepository $productRepository): Response
    {

        return $this->render('product/index.html.twig', [
            'products' => $productRepository->findAll(),

        ]);
    }

    /**
     * @Route("/new", name="product_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {

        $product = new Product();
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

              //on recupere les images transmises
              $images = $form->get('images')->getData();
               // on boucle sur les images
            foreach ($images as $image)
            {
                //on genere nv fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                $destination = $this->getParameter('kernel.project_dir') . '/public/product';

                //copier fichier dans upload
                $image->move(
                    $destination,
                    $fichier
                );

                //on stocke image dans BD
                $img = new Image();
                $img->setSource($fichier);
                $product->addImage($img);


            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/new.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_show", methods={"GET"})
     */
    public function show(Product $product): Response
    {
        return $this->render('product/show.html.twig', [
            'product' => $product,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="product_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            //on recupere les images transmises
            $images = $form->get('images')->getData();
            // on boucle sur les images
            foreach ($images as $image)
            {
                //on genere nv fichier
                $fichier = md5(uniqid()) . '.' . $image->guessExtension();
                $destination = $this->getParameter('kernel.project_dir') . '/public/product';

                //copier fichier dans upload
                $image->move(
                    $destination,
                    $fichier
                );

                //on stocke image dans BD
                $img = new Image();
                $img->setSource($fichier);
                $product->addImage($img);


            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('product_index');
        }

        return $this->render('product/edit.html.twig', [
            'product' => $product,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="product_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Product $product): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($product);
            $entityManager->flush();
        }

        return $this->redirectToRoute('product_index');
    }

    /**
     * @Route("/supprime/image/{id}" , name= "product_delete_image" )
     */

    public function deleteImage(Image $image, Request $request)
    {
            //recuperer le nom
            $nom = $image->getSource();

            //supprimer fichier
            unlink($destination = $this->getParameter('kernel.project_dir') . '/public/product'
            . '/' . $nom);

            //on supp l'entre de la base
            $em = $this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();
            return $this->redirectToRoute('product_edit',['id'=>$image->getProduct()->getId()]);


    }
}
