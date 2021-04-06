<?php

namespace App\Controller;

use App\Entity\Blog;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
class FrontblogController extends AbstractController
{
    /**
     * @Route("/frontblog", name="frontblog")
     */
    public function index(): Response
    {
        $blogs=$this->getDoctrine()->getRepository(Blog::class)->findAll();
        return $this->render('frontblog/list.html.twig', [
            'blogs' => $blogs,
        ]);
    }
     /**
     * @Route("/favoris", name="favoris")
     */
    public function favouris(): Response
    {
        $blogs=$this->getDoctrine()->getRepository(Blog::class)->findAll();
        return $this->render('frontblog/favoris.html.twig', [
            'blogs' => $blogs,
        ]);
    }
       /**
     * @Route("/frontblog/{id}", name="blog_showfront", methods={"GET"})
     */
    public function showblog(Blog $blog): Response
    {
        return $this->render('frontblog/show.html.twig', [
            'blog' => $blog,
        ]);
    }
     /**
     * @Route("/add", name="add_like", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
     
            $user = $this->getUser();
            $id = $request->request->get('id');
            $entityManager = $this->getDoctrine()->getManager();
            $blog = $this->getDoctrine()
            ->getRepository(Blog::class)
            ->find($id);
            $blog->addLike($user);
            $user->addLike($blog);
            $blog->removeDislike($user);
            $user->removeDislike($blog);

            $entityManager->persist($blog);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('blog_showfront',['id' => $blog->getId()]
    );
                    }

      /**
     * @Route("/addfavoris", name="add_favoris", methods={"GET","POST"})
     */
    public function favours(Request $request): Response
    {
     
            $user = $this->getUser();
            $id = $request->request->get('id');
            $entityManager = $this->getDoctrine()->getManager();
            $blog = $this->getDoctrine()
            ->getRepository(Blog::class)
            ->find($id);
            $blog->addFavori($user);
            $user->addBlog($blog);
            $entityManager->persist($blog);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('favoris'
    );
                    }
     /**
     * @Route("/removefavoris", name="remove_favoris", methods={"GET","POST"})
     */
    public function removefav(Request $request): Response
    {
     
            $user = $this->getUser();
            $id = $request->request->get('id');
            $entityManager = $this->getDoctrine()->getManager();
            $blog = $this->getDoctrine()
            ->getRepository(Blog::class)
            ->find($id);
            $blog->removeFavori($user);
            $user->removeBlog($blog);
            $entityManager->persist($blog);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('favoris'
        );    
                    }
                         /**
     * @Route("/remove", name="remove_like", methods={"GET","POST"})
     */
    public function remove(Request $request): Response
    {
     
            $user = $this->getUser();
            $id = $request->request->get('id');
            $entityManager = $this->getDoctrine()->getManager();
            $blog = $this->getDoctrine()
            ->getRepository(Blog::class)
            ->find($id);
            $blog->removeLike($user);
            $user->removeLike($blog);
            $blog->addDislike($user);
            $user->addDislike($blog);

            $entityManager->persist($blog);
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('blog_showfront',['id' => $blog->getId()]
    );
                    }

}

