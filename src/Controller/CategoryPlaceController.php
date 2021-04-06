<?php

namespace App\Controller;

use App\Entity\CategoryPlace;
use App\Form\CategoryPlaceType;
use App\Repository\CategoryPlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryPlaceController extends AbstractController
{
    /**
     * @Route("/category/place", name="category_place")
     */
    public function index(): Response
    {
        return $this->render('category_place/index.html.twig', [
            'controller_name' => 'CategoryPlaceController',
        ]);
    }
    /**
     * @Route("/listcategory/place", name="category_placelist")
     */
    public function list(): Response
    {
        $categories=$this->getDoctrine()->getRepository(CategoryPlace::class)->findAll();
        return $this->render('category_place/listcategory.html.twig', [
            'categories' => $categories,
        ]);
    }
    /**
     * @Route("/addcategory/place", name="category_placeadd")
     */
    public function add(Request $request): Response
    {
        $category = new CategoryPlace();
        $form = $this->createForm(CategoryPlaceType::class,$category);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $manager=$this->getDoctrine()->getManager();
            $manager->persist($category);
            $manager->flush();
            return $this->redirectToRoute('category_placelist');
        }
        return $this->render('category_place/addcategory.html.twig', [
            'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/deletecategory/place/{id}", name="category_placedelete")
     */
    public function delete($id,CategoryPlaceRepository $repository): Response
    {
        $category = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();
        return $this->redirectToRoute('category_placelist');
    }
    /**
     * @Route("/updatecategory/place/{id}", name="category_placeupdate")
     */
    public function update(Request $request, CategoryPlace $category): Response
    {
        $form = $this->createForm(CategoryPlaceType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('category_placelist');
        }

        return $this->render('category_place/updatecategory.html.twig', [
            'categories' => $category,
            'form' => $form->createView(),
        ]);
    }
}
