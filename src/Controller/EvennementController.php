<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Image;
use App\Entity\User;
use App\Form\EventType;
use App\Repository\EventRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

/**
 * @Route("/admin/evennements")
 */


class EvennementController extends AbstractController
{
    /**
     * @Route("/", name="evennement")
     */
    public function index(EventRepository $repository): Response
    {
        return $this->render('evennement/index.html.twig', [
            'events' => $repository->findAll()
        ]);
    }

    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/form", name="create_event")
     */
    public function createEvent(\Symfony\Component\HttpFoundation\Request $request)
    {
        // you can fetch the EntityManager via $this->getDoctrine()
        // or you can add an argument to the action: createProduct(EntityManagerInterface $entityManager)
        $event = new Event();
        $form = $this->createForm(EventType::class,$event);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $manager = $this->getDoctrine()->getManager();
            $event->setPlaceDisponible($event->getNbPersons());
            $manager->persist($event);
            $manager->flush();
            /** @var UploadedFile $uploadedFile */
            $uploadedFiles=$form["files"]->getData();
            if ($uploadedFiles) {
                foreach ($uploadedFiles as $file){
                    $destination = $this->getParameter('kernel.project_dir') . '/public/event';
                    $newFilename = 'eve-'. uniqid(). date('M-Y') . '-' . $file->guessExtension();
                    $file->move(
                        $destination,
                        $newFilename
                    );
                    $image=new Image();
                    $image->setEvent($event);
                    $image->setSource($newFilename);
                    $manager->persist($image);
                    $manager->flush();

                }
            }
            $transport = (new \Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
                ->setUsername('promoesprit@gmail.com')
                ->setPassword('13001074aa')
            ;
            $mailer = new \Swift_Mailer($transport);
            $url = $this->generateUrl('evennement_show', array('id' => $event->getId()), UrlGeneratorInterface::ABSOLUTE_URL);

            foreach ($this->getDoctrine()->getRepository(User::class)->findAll() as $client) {
                if ($client->getRole() == 'ROLE_CLIENT') {
                    $message = (new \Swift_Message('Nouveau Evenement'))
                        ->setFrom('promoesprit@gmail.com')
                        ->setTo($client->getEmail())
                        ->setBody(
                            $this->renderView('emails/event.html.twig', [
                                'event' => $event,
                                'url'=>$url
                            ]),
                            'text/html'
                        );
                    $mailer->send($message);
                }
            }
            return $this->redirectToRoute('evennement');
        }
        return $this->render('evennement/AddEvent.html.twig',['form'=>$form->createView()]);
    }


    /**
     * @Route("/form/{id}", name="evennement_edit")
     */
    public function edit(\Symfony\Component\HttpFoundation\Request $request, Event $event): Response
    {
        $form = $this->createForm(EventType::class, $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $event->setPlaceDisponible($event->getNbPersons());
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('evennement');
        }
        return $this->render('evennement/edit.html.twig', [
            'event' => $event,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/delete/{id}", name="evennement_delete")
     */
    public function deleteEvent($id,EventRepository $repository): Response
    {
        $event = $repository->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($event);
        $em->flush();
         return $this->redirectToRoute('evennement');
    }


}
