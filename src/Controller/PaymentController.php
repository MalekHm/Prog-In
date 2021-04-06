<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Product;
use App\Entity\ProductOrder;
use App\Repository\ProductRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Stripe\Stripe;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Validator\Constraints\Date;


/**
 * @Route("/payment")
 */
class PaymentController extends AbstractController
{
    /**
     * @Route("/", name="payment")
     */

    public function index(SessionInterface $session, ProductRepository $productRepository ): Response
    {

        $panier = $session->get('panier' , []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity){
            $panierWithData[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }
        $panierr = $session->get('panierr' , []);
        $panierWithDatar = [];
        foreach ($panierr as $id => $quantity){
            $panierWithDatar[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }
        $total=0;
        foreach ($panierWithData as $item) {
            if($item['product']->getPromo()!=0){
                $totalItem = $item['product']->getPrice() * $item['quantity']-($item['product']->getPrice() * $item['quantity']*$item['product']->getPromo())/100;
            }
            else{
                $totalItem = $item['product']->getPrice() * $item['quantity'];
            }
            $total += $totalItem;

        }
        $totalr= 0;
        foreach ($panierWithDatar as $itemr) {
            if($itemr['product']->getPromo()!=0){
                $totalrItem = $itemr['product']->getPricer() * $itemr['quantity']-($itemr['product']->getPricer() * $itemr['quantity']*$itemr['product']->getPromo())/100;
            }
            else{
                $totalrItem = $itemr['product']->getPricer() * $itemr['quantity'];
            }
            $totalr += $totalrItem;
        }

        $totalf= $totalr + $total;

        $fraislivraison= 7.00;
        $totalfinal= $fraislivraison + $totalf;
        return $this->render('payment/index.html.twig', [
            'controller_name' => 'PaymentController',
            'items' => $panierWithData,
            'itemsr' => $panierWithDatar,
            'total' => $total,
            'totalr' => $totalr,
            'totalf' => $totalf,
            'totalfinal' => $totalfinal,
            'fraislivraison' => $fraislivraison
        ]);
    }


    /**
     * @route ("/formulaire/FacturePdf/{id}", name="profacture")
     */
    function generePDF(Order $order)
    {

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $html = $this->renderView('FacturePdf/FacturePdf.html.twig', [
            'order'=>$order,
            'auj'=>new \DateTime()
        ]);

        $dompdf->loadHtml($html);

        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $dompdf->stream("facture.pdf", [
            "Attachment" => false
        ]);

    }


    /**
     * @Route("/create-checkout-session", name="checkout")
     *
     */
    public function checkout(SessionInterface $session, ProductRepository $productRepository ): Response
    {
        $panier = $session->get('panier' , []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity){
            $panierWithData[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }
        $panierr = $session->get('panierr' , []);
        $panierWithDatar = [];
        foreach ($panierr as $id => $quantity){
            $panierWithDatar[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }
        $total = 0;
        foreach ($panierWithData as $item) {
            $totalItem = $item['product']->getPrice() * $item['quantity'];
            $total += $totalItem;

        }
        $totalr= 0;
        foreach ($panierWithDatar as $itemr) {
            $totalrItem = $itemr['product']->getPricer() * $itemr['quantity'];
            $totalr += $totalrItem;
        }


        $totalf= $totalr + $total;
        $fraislivraison= 7.00;
        $totalfinal= $fraislivraison + $totalf;

        \Stripe\Stripe::setApiKey('sk_test_51IYAqkFZNE9gSdmYXgtJuw1A5n3ytWL2VCAYzSmOw73EiqAu8gjdjrWUkq19sUVcnixESeDBvhRCya8uP7sAH21d00PfsEIN2Z');
        $session = \Stripe\Checkout\Session::create([
           'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'eur',
                    'product_data' => [
                        'name' => 'Total commandes',
                        ],
                    'unit_amount' => $totalf*100,
                    ],
                'quantity' => 1,
                ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url'=>  $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
            ]);
        return new JsonResponse(['id' => $session->id,
        'controller_name' => 'PaymentController',
            'items' => $panierWithData,
            'itemsr' => $panierWithDatar,
            'total' => $total,
            'totalr' => $totalr,
            'totalf' => $totalf,
            'totalfinal' => $totalfinal,
            'fraislivraison' => $fraislivraison]);

    }

    /**
     * @Route("/success", name="success")
     */
    public function success(SessionInterface $session, ProductRepository $productRepository )
    {
        $order=new Order();
        $order->setUser($this->getUser());
        $order->setOrderDate(new \DateTime());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);
        $this->getDoctrine()->getManager()->flush();
        $panier = $session->get('panier' , []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity){
            $panierWithData[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }
        $panierr = $session->get('panierr' , []);
        $panierWithDatar = [];
        foreach ($panierr as $id => $quantity){
            $panierWithDatar[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }

        foreach ($panierWithData as $item) {
            $productOrder=new ProductOrder();
            $productOrder->setOrder($order);
            $productOrder->setQuantity($item['quantity']);
            $productOrder->setProduct($productRepository->find($item['product']->getId()));
            $productOrder->setType(true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($productOrder);
            $product=$productRepository->find($item['product']->getId());
            $product->setQuantity($product->getQuantity()-$item['quantity']);
            $this->getDoctrine()->getManager()->flush();

        }

        foreach ($panierWithDatar as $itemr) {
            $productOrder=new ProductOrder();
            $productOrder->setOrder($order);
            $productOrder->setQuantity($itemr['quantity']);
            $productOrder->setProduct($productRepository->find($itemr['product']->getId()));
            $productOrder->setType(false);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($productOrder);
            $product=$productRepository->find($itemr['product']->getId());
            $product->setQuantity($product->getQuantity()-$itemr['quantity']);
            $this->getDoctrine()->getManager()->flush();
        }
        $session->remove('panierr');
        $session->remove('panier');
        return $this->redirectToRoute('orderlistFront');

    }

    /**
     * @Route("/error", name="error")
     */
    public function error()
    {
        return $this->render('payment/error.html.twig',[]);
    }

    /**
     * @Route("/successlivraison", name="successlivraison")
     */
    public function successlivraison(SessionInterface $session, ProductRepository $productRepository )
    {
        $order=new Order();
        $order->setUser($this->getUser());
        $order->setOrderDate(new \DateTime());
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($order);
        $this->getDoctrine()->getManager()->flush();
        $panier = $session->get('panier' , []);
        $panierWithData = [];
        foreach ($panier as $id => $quantity){
            $panierWithData[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }
        $panierr = $session->get('panierr' , []);
        $panierWithDatar = [];
        foreach ($panierr as $id => $quantity){
            $panierWithDatar[] = [
                'product' => $productRepository-> find($id),
                'quantity' => $quantity
            ];
        }

        foreach ($panierWithData as $item) {
            $productOrder=new ProductOrder();
            $productOrder->setOrder($order);
            $productOrder->setQuantity($item['quantity']);
            $productOrder->setProduct($productRepository->find($item['product']->getId()));
            $productOrder->setType(true);
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($productOrder);
            $product=$productRepository->find($item['product']->getId());
            $product->setQuantity($product->getQuantity()-$item['quantity']);
            $this->getDoctrine()->getManager()->flush();

        }

        foreach ($panierWithDatar as $itemr) {
            $productOrder=new ProductOrder();
            $productOrder->setOrder($order);
            $productOrder->setQuantity($itemr['quantity']);
            $productOrder->setProduct($productRepository->find($itemr['product']->getId()));
            $productOrder->setType(false);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($productOrder);
            $product=$productRepository->find($itemr['product']->getId());
            $product->setQuantity($product->getQuantity()-$itemr['quantity']);
            $this->getDoctrine()->getManager()->flush();
        }
        $session->remove('panierr');
        $session->remove('panier');
        return $this->redirectToRoute('orderlistFront');

    }


}
