<?php

namespace App\Controller;

use App\Entity\Promotion;
use App\Entity\User;
use App\Form\PromotionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * @Route("/admin/promotions")
 */
class PromotionController extends AbstractController
{

    /**
     * @Route("/", name="back_template_promotions")
     */
    public function promotions(): Response
    {
        return $this->render('back_template/promotion/index.html.twig', [
            'controller_name' => 'PromotionController',
            'promotions'=> $this->getDoctrine()->getRepository(Promotion::class)->findAll(),
        ]);

    }

    /**
     * @Route("/form", name="back_template_promotions_form")
     */
    public function newPromotion(Request $request): Response
    {
        $promotion =new Promotion();
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($promotion);
            $this->getDoctrine()->getManager()->flush();

//            $transport = (new \Swift_SmtpTransport('', 465, 'ssl'))
//                ->setUsername('promoesprit@gmail.com')
//                ->setPassword('13001074aa')
//            ;
//            $mailer = new \Swift_Mailer($transport);

            $https['ssl']['verify_peer'] = FALSE;
            $https['ssl']['verify_peer_name'] = FALSE;
            $transporter = (new \Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
                ->setAuthMode('login')
                ->setUsername('promoesprit@gmail.com')
                ->setPassword('13001074aa');

            $transporter->setStreamOptions($https);
            $mailer = new \Swift_Mailer($transporter);
            foreach ($this->getDoctrine()->getRepository(User::class)->findAll() as $client) {
                if($client->getRole()=='ROLE_CLIENT'){
                    $message = (new \Swift_Message('New Promotion'))
                        ->setFrom('promoesprit@gmail.com')
                        ->setTo($client->getEmail())
                        ->setBody(
                            $this->renderView(
                                'emails/welcome.html.twig',
                                ['promotion' => $promotion]
                            ),
                            'text/html'
                        );
                    $mailer->send($message);
                }

            }
            $this->addFlash('success', 'Promotion added successfully');
            return $this->redirectToRoute('back_template_promotions');
        }

            return $this->render('back_template/promotion/form.html.twig', [
            'controller_name' => 'PromotionController',
            'form' => $form->createView(),
                'title'=>"Add Promotion"
        ]);
    }

    /**
     * @Route("/form/{id}", name="back_template_promotions_form_edit")
     */
    public function editPromotion(Request $request , $id): Response
    {
        $promotion =$this->getDoctrine()->getRepository(Promotion::class)->find($id);
        $form = $this->createForm(PromotionType::class, $promotion);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($promotion);
            $this->getDoctrine()->getManager()->flush();
            $this->addFlash('success', 'Promotion edited successfully');
            return $this->redirectToRoute('back_template_promotions');
        }

        return $this->render('back_template/promotion/form.html.twig', [
            'controller_name' => 'PromotionController',
            'form' => $form->createView(),
            'title'=>"Edit Promotion"
        ]);
    }

    /**
     * @Route("/delete/{id}", name="back_template_promotions_delete")
     */
    public function deletePromotion($id): Response
    {
        $promotion =$this->getDoctrine()->getRepository(Promotion::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($promotion);
        $em->flush();
        $this->addFlash('danger', 'Promotion deleted successfully');
        return $this->redirectToRoute('back_template_promotions');

    }
}
