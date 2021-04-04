<?php

namespace App\Controller;

use App\Entity\CategoryPlace;
use App\Entity\CommentPlace;
use App\Entity\CommentsPlace;
use App\Entity\Place;
use App\Form\CommentPlaceType;
use App\Form\CommentsPlaceType;
use App\Repository\CategoryPlaceRepository;
use App\Repository\PlaceRepository;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\DateTime;

class PlaceFrontController extends AbstractController
{
    /**
     * @Route("/place/front", name="place_front")
     */
    public function index(): Response
    {
        return $this->render('place_front/index.html.twig', [
            'controller_name' => 'PlaceFrontController',
        ]);
    }
    /**
     * @Route("/listplacefront", name="place_frontlist")
     */
    public function list(): Response
    {
        $places=$this->getDoctrine()->getRepository(Place::class)->findAll();
        $categories=$this->getDoctrine()->getRepository(CategoryPlace::class)->findAll();

        return $this->render('place_front/list.html.twig', [
            'places' => $places,
            'categories'=> $categories,
        ]);
    }
    /**
     * @Route("/consultplacefront/{id}", name="place_frontconsult")
     */
    public function placedetails(Place $places,Request $request): Response
    {


        $em = $this->getDoctrine()->getManager();
        $places->setNbView($places->getNbView()+1);

        $em->persist($places);
        $em->flush();

        // Partie commentaire
        // on crée le commentaire
        $comment= new CommentsPlace();

        // on genere le formulaire
        $commentForm=$this->createForm(CommentsPlaceType::class,$comment);

        $commentForm->handleRequest($request);

        //traitement du formulaire
        if($commentForm->isSubmitted() && $commentForm->isValid()){
           $comment->setCreatedAt(new \DateTime());
           $comment->setPlace($places);

           $emm=$this->getDoctrine()->getManager();
           $emm->persist($comment);
           $emm->flush();

           $this->addFlash('message','votre commentaire a été bien envoyé ');
           return $this->redirectToRoute('place_frontconsult',[
               'id'=>$places->getId()]);
        }


        return $this->render('place_front/listconsult.html.twig', [
            'places' => $places,
            'commentForm'=>$commentForm->createView()

        ]);
    }

    /**
     * @Route("/listplacecategory/{id}", name="place_frontlistcategory")
     */
    public function listCategory($id, CategoryPlaceRepository $repository): Response
    {

        $categories = $this->getDoctrine()
            ->getRepository(CategoryPlace::class)
            ->find($id);

        $place = $categories->getPlaces();
        return $this->render('place_front/list.html.twig', [
          'places' => $place,
         'categories'=> $categories,
        ]);
    }




}
