<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\CommentArticle;
use App\Entity\Blog;

use App\Form\CommentArticleType;
use App\Repository\CommentArticleRepository;
use Symfony\Component\HttpFoundation\Request;

class CommentController extends AbstractController
{
    /**
     * @Route("/comment", name="comment")
     */
    public function index(): Response
    {
        return $this->render('comment/index.html.twig', [
            'controller_name' => 'CommentController',
        ]);
    }
    /**
     * @Route("/deletecomment", name="deletecomment", methods={"GET"})
     */
    public function delete(Request $request): Response
    {
        $id = $request->query->get('id');
        var_dump($id);
        $blog = $this->getDoctrine()
        ->getRepository(CommentArticle::class)
        ->find($id);
        
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($blog);
            $entityManager->flush();
      

        

    }
}
