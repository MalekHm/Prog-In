<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Entity\Publicity;
use App\Form\PromotionType;
use App\Form\PublicityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/publicitys")
 */
class PublicityController extends AbstractController
{


    /**
     * @Route("/", name="back_template_publicitys")
     */
    public function publicitys(): Response
    {
        return $this->render('back_template/publicity/index.html.twig', [
            'controller_name' => 'PublicityController',
            'publicitys'=> $this->getDoctrine()->getRepository(Publicity::class)->findAll(),
        ]);
    }

    /**
     * @Route("/form", name="back_template_publicitys_form")
     */
    public function newPublicity(Request $request): Response
    {
        $publicity =new Publicity();
        $form = $this->createForm(PublicityType::class, $publicity);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['picturePub']->getData();
            if ($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir') . '/public/publicity';
                $newFilename = 'pub-'. uniqid(). date('M-Y') . '-' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $publicity->setPicturePub($newFilename);
            }
            $entityManager->persist($publicity);
            foreach ($this->getDoctrine()->getRepository(Publicity::class)->findAll() as $pub){
                if($pub->getPosition()==$publicity->getPosition() && $pub->getId()!=$publicity->getId()){
                    $pub->setPosition("NAN");
                }
            }
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Publicity added successfully');
            return $this->redirectToRoute('back_template_publicitys');
        }

            return $this->render('back_template/publicity/form.html.twig', [
            'controller_name' => 'PublicityController',
            'form' => $form->createView(),
                'title'=>"Add Publicity",
                'publicity'=>$publicity
        ]);
    }

    /**
     * @Route("/form/{id}", name="back_template_publicitys_form_edit")
     */
    public function editPublicty(Request $request , $id): Response
    {
        $publicity =$this->getDoctrine()->getRepository(Publicity::class)->find($id);
        $form = $this->createForm(PublicityType::class, $publicity);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['picturePub']->getData();
            if ($uploadedFile) {
                $destination = $this->getParameter('kernel.project_dir') . '/public/publicity';
                $newFilename = 'pub-'.uniqid(). date('M-Y') . '-' . $uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $publicity->setPicturePub($newFilename);
            }
            $entityManager->persist($publicity);
            foreach ($this->getDoctrine()->getRepository(Publicity::class)->findAll() as $pub){
                if($pub->getPosition()==$publicity->getPosition() && $pub->getId()!=$publicity->getId()){
                    $pub->setPosition("NAN");
                }
            }
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Publicity edited successfully');
            return $this->redirectToRoute('back_template_publicitys');
        }

        return $this->render('back_template/publicity/form.html.twig', [
            'controller_name' => 'PublicityController',
            'form' => $form->createView(),
            'title'=>"Edit Publicity",
            'publicity'=>$publicity

        ]);
    }

    /**
     * @Route("/delete/{id}", name="back_template_publicitys_delete")
     */
    public function deletePublicity($id): Response
    {
        $publicity =$this->getDoctrine()->getRepository(Publicity::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($publicity);
        $em->flush();
        $this->addFlash('danger', 'Publicity deleted successfully');
        return $this->redirectToRoute('back_template_publicitys');

    }
}
