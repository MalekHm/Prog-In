<?php

namespace App\Controller;

use App\Entity\CategoryPlace;
use App\Entity\CommentsPlace;
use App\Entity\Place;
use App\Repository\CommentsPlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/admin/places")
 */
class CommentsPlaceController extends AbstractController
{
    /**
     * @Route("/comments/place", name="comments_place")
     */
    public function index(): Response
    {
        return $this->render('comments_place/index.html.twig', [
            'controller_name' => 'CommentsPlaceController',
        ]);
    }
    /**
     * @Route("/list/placecomment/{id}", name="place_listcomment")
     */
    public function listComment($id, CommentsPlaceRepository $repository): Response
    {
        $categories=$this->getDoctrine()->getRepository(CategoryPlace::class)->findAll();
        $place = $this->getDoctrine()->getRepository(Place::class)->find($id);
        $comment = $place->getCommentsPlaces();
        $place->setNbComment(count($comment));
        return $this->render('comments_place/list.html.twig', [
            'places' => $place,
            'comments'=> $comment,
            'categories'=> $categories,
        ]);
    }
    /**
     * @Route("/deletecomment/{id}", name="comment_delete")
     */
    public function delete($id,CommentsPlaceRepository $repository): Response
    {
        $comment = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($comment);
        $em->flush();
        return $this->redirectToRoute('place');
    }
}
