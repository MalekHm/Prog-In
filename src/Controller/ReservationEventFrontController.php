<?php

namespace App\Controller;

use App\Entity\Event;
use App\Entity\Reservation;
use App\Form\ReservationFrontType;
use App\Form\ReservationType;
use App\Repository\ReservationRepository;
use Com\Tecnick\Barcode\Barcode;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class ReservationEventFrontController extends AbstractController
{
    /**
     * @Route("/reservations/", name="reservation_event_front")
     */
    public function index(): Response
    {
        return $this->render('reservation_event_front/index.html.twig', [
            'controller_name' => 'ReservationEventFrontController',
            'reservations'=>$this->getUser()->getReservations()

        ]);
    }



    /**
     * @Route("/reservations/delete/{id}", name="client_reservation_delete")
     */
    public function deleteReservation($id,ReservationRepository $repository): Response
    {



        $reservation = $repository->find($id);
        $interval = $reservation->getEvent()->getStartDate()->diff(new \DateTime());
        $interval= $interval->format('%a');
        if($interval<=1){
            $this->addFlash('danger', 'Vous pouvez plus annuler cette réservation , il reste moins que 1 jour');
            return $this->redirectToRoute('reservation_event_front');

        }
        $em = $this->getDoctrine()->getManager();

        if($reservation->getEvent()->getStartDate()>new \DateTime(-1))
        $reservation->setStatus(false);
        $reservation->getEvent()->setPlaceDisponible($reservation->getEvent()->getPlaceDisponible()+$reservation->getNbParticipants());
        $em->flush();
        $this->addFlash('danger', 'Réservation annuler avec succés');

        return $this->redirectToRoute('reservation_event_front');
    }

    /**
     * @route ("/reservations/ticket/{id}", name="PDF")
     */
    function generePDF($id,ReservationRepository $repository)
    {
        $barcode = new Barcode();
        $bobj = $barcode->getBarcodeObj('QRCODE,H', 'http://localhost:8001/reservations/ticket/'.$id, -4, -4, 'black', array(-2, -2, -2, -2))->setBackgroundColor('#f0f0f0');
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('ticket/index.html.twig', [
            'codeqr'=>"data:image/png;base64,".base64_encode($bobj->getPngData()),
            'reservation'=>$reservation = $repository->findOneBy(["token"=>$id])
        ]);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("contract.pdf", [
            "Attachment" => false
        ]);
    }
    /**
     * @Route("/payment/success", name="successPaiment")
     */
    public function success(): Response
    {
        return $this->render('reservation_event_front/success.html.twig', [
            'controller_name' => 'ReservationEventFrontController',

        ]);
    }
    /**
     * @Route("/payment/error", name="errorPaiment")
     */
    public function error(): Response
    {
        return $this->render('reservation_event_front/error.html.twig', [
            'controller_name' => 'ReservationEventFrontController',

        ]);
    }

    /**
     * @Route("/create-checkout-session/{ammount}", name="checkout")
     */
    public function checkout($ammount): Response
    {
        Stripe::setApiKey('sk_test_4eC39HqLyjWDarjtT1zdp7dc');
        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'USD',
                    'product_data' => [
                        'name' => 'Payment de réservation',
                    ],
                    'unit_amount' => $ammount*100,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('successPaiment',[],UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->generateUrl('errorPaiment',[],UrlGeneratorInterface::ABSOLUTE_URL),
        ]);
        return new JsonResponse(['id' => $session->id ]);
    }
}
