<?php

namespace App\Controller;

use App\Entity\Community;
use App\Form\CommunityType;
use App\Repository\CommunityRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/community")
 */
class CommunityController extends AbstractController
{
    /**
     * @Route("/", name="community_index", methods={"GET"})
     */
    public function index(CommunityRepository $communityRepository): Response
    {
        return $this->render('community/index.html.twig', [
            'communities' => $communityRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="community_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $community = new Community();
        $form = $this->createForm(CommunityType::class, $community);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($community);
            $entityManager->flush();

            return $this->redirectToRoute('community_index');
        }

        return $this->render('community/new.html.twig', [
            'community' => $community,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="community_show", methods={"GET"})
     */
    public function show(Community $community): Response
    {
        return $this->render('community/show.html.twig', [
            'community' => $community,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="community_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Community $community): Response
    {
        $form = $this->createForm(CommunityType::class, $community);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('community_index');
        }

        return $this->render('community/edit.html.twig', [
            'community' => $community,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="community_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Community $community): Response
    {
        if ($this->isCsrfTokenValid('delete'.$community->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($community);
            $entityManager->flush();
        }

        return $this->redirectToRoute('community_index');
    }
}
