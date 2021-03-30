<?php

namespace App\Controller;

use App\Entity\Category;
use App\Data\SearchData;
use App\Entity\Event;
use App\Entity\Reservation;
use App\Form\ReservationFrontType;
use App\Form\SearchFormEventType;
use App\Repository\CategoryRepository;
use App\Repository\EventRepository;
use App\Repository\ReservationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
/**
 * @Route("/evennements")
 */
class EvennementFrontController extends AbstractController
{
    /**
     * @Route("/", name="evennement_front")
     */
    public function index(Request $request): Response
    {

        $categories= $this->getDoctrine()->getRepository(Category::class)->findAll();
        $event= $this->getDoctrine()->getRepository(Event::class)->findByDate();

        if ($request->query->get('category')) {
            $categorie=$this->getDoctrine()->getRepository(Category::class)->findOneBy(["name"=>$request->query->get('category')]);
            $event=[];
            foreach ($categorie->getEvents() as $eve){
                if($eve->getStartDate()>new \DateTime()){
                    array_push($event,$eve);
                }
            }
        }

        if ($request->query->get('tri')) {
            if($request->query->get('tri')=="price"){
                $event=$this->getDoctrine()->getRepository(Event::class)->listOrderByPrice();
            }
            else{
                $event=$this->getDoctrine()->getRepository(Event::class)->listOrderBystartDate();
            }
        }

        if ($request->query->get('filter')) {
            $event=$this->getDoctrine()->getRepository(Event::class)->findSearch($request->query->get('filter'));
        }

        $categories= $this->getDoctrine()->getRepository(Category::class)->findAll();
        return $this->render('evennement_front/listevent.html.twig', [
            'events' => $event,
            'categories' => $categories,

        ]);
    }

    /**
     * @Route("/{id}", name="evennement_show")
     */
    public function showEvent(Request $request,$id): Response
    {
        $events=$this->getDoctrine()->getRepository(Event::class)->find($id);
        $em =$this->getDoctrine()->getManager();
        if ($request->query->get('nbPersonnes')) {
            if($events->getPlaceDisponible()>$request->query->get('nbPersonnes')){
                $reservation = new Reservation();
                $reservation->setUser($this->getUser());
                $reservation->setEvent($events);
                $reservation->setReservationDate(new \DateTime());
                $reservation->setStatus(true);
                $reservation->setToken(uniqid());
                $reservation->setNbParticipants($request->query->get('nbPersonnes'));
                $montant=$request->query->get('nbPersonnes')*$events->getPriceEvent();
                $reduction=0;
                foreach ($events->getPromotion() as $promotion){
                    if($promotion->getStartDatePromotion()<=new \DateTime() && $promotion->getEndDatePromotion()>=new \DateTime()){
                        $reduction=($montant*$promotion->getPourcentage())/100;
                    }
                }
                $reservation->setResteapayer($montant);
                $reservation->setReduction($reduction);
                $events->setPlaceDisponible($events->getPlaceDisponible()-$request->query->get('nbPersonnes'));

                $em->persist($reservation);
                $em->flush();
                $url = $this->generateUrl('PDF', array('id' => $reservation->getToken()), UrlGeneratorInterface::ABSOLUTE_URL);
                $transport = (new \Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
                    ->setUsername('promoesprit@gmail.com')
                    ->setPassword('13001074aa')
                ;
                $mailer = new \Swift_Mailer($transport);
                $message = (new \Swift_Message('Réservation Hikers'))
                    ->setFrom('promoesprit@gmail.com')
                    ->setTo($this->getUser()->getEmail())
                    ->setBody(
                        $this->renderView('emails/ticket.html.twig', [
                            'url' => $url,
                            'reservation'=>$reservation
                        ]),
                        'text/html'
                    );
                $mailer->send($message);
                return $this->redirectToRoute('reservation_event_front');

                //redirect to réservation
            }
            else{
                $this->addFlash('danger', 'Impossible d effectuer cette operation il reste '.$events->getPlaceDisponible().' plaçes disponibles');
            }
            return $this->redirectToRoute('evennement_show',['id'=>$id]);


        }


        $events->setNbViews($events->getNbViews()+1);

        $em->flush();

        $reservation = new Reservation();
        $form = $this->createForm(ReservationFrontType::class,$reservation);
        $form->handleRequest($request);
        return $this->render('evennement_front/consulterEvent.html.twig', [
            'events' => $events,
            'form'=>$form->createView()
        ]);
    }



}
