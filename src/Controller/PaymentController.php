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
     * @Route("/facture",name="facture")
     */
    public function showfacture():Response{
        return $this->render('payment/facture.html.twig');
    }

    /**
     * @route ("formulaire/FacturePdf", name="PDF")
     */
    function generePDF()
    {
        // Configure Dompdf according to your needs

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');


        //$form = $repository->find($ref);
        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('FacturePdf/FacturePdf.html.twig', [
            //'form' => $form
        ]);
        //$html .= '';
        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("facture.FacturePdf", [
            "Attachment" => true
        ]);
    }


    /**
     * @Route("/create-checkout-session", name="checkout")
     *
     */
    public function checkout()
    {
        \Stripe\Stripe::setApiKey('sk_test_51IYAqkFZNE9gSdmYXgtJuw1A5n3ytWL2VCAYzSmOw73EiqAu8gjdjrWUkq19sUVcnixESeDBvhRCya8uP7sAH21d00PfsEIN2Z');
        $session = \Stripe\Checkout\Session::create([
           'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'T-shirt',
                        ],
                    'unit_amount' => 2000,
                    ],
                'quantity' => 1,
                ]],
            'mode' => 'payment',
            'success_url' => $this->generateUrl('success', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url'=>  $this->generateUrl('error', [], UrlGeneratorInterface::ABSOLUTE_URL),
            ]);
        return new JsonResponse(['id' => $session->id]);

    }

    /**
     * @Route("/success", name="success")
     */
    public function success()
    {
        return $this->render('payment/success.html.twig',[]);
    }

    /**
     * @Route("/error", name="error")
     */
    public function error()
    {
        return $this->render('payment/error.html.twig',[]);
    }




    /**
     * @Route("/order", name="order")
     */

    public function orderAction(SessionInterface $session)
    {
        $em = $this->getDoctrine()->getManager();
        $products = $em->getRepository(Product::class)->findAll();
        $entityManager = $this->getDoctrine()->getManager();

        $commande = new order();
        $user = $this->getUser();

        $commande->setUserId($user->getId());
        $commande->setUserName($user->getLastName());
        $commande->setUserAdress($user->getEmail());
        $commande->setOrderDate(new \DateTime());
        $commande->setStatus('En attente');
        $commande->setUserPhone($user->getPhone());
        $entityManager->persist($commande);
        $entityManager->flush();


        $idCommande = $commande->getId();


        $panier = $session->get('panier', []);
        $panierWithData = [];

        $em = $this->getDoctrine()->getManager();
        foreach ($panier as $id => $quantity)
        {

            $panierWithData[] = [
                'product'=> $em->getRepository(Product::class)->find($id),
                'quantity'=>$quantity
            ];
        }



        foreach ($panierWithData as $item)
        {
            $prodCom = new ProductOrder() ;
            $prodCom->setNameProduct($item['product']->getName());
            $prodCom->setQuantity($item['quantity']);
            $prodCom->setOrderId($idCommande);
            $entityManager->persist($prodCom);
            $entityManager->flush();

        }



        $panierr = $session->get('panierr', []);
        $panierWithDatar = [];

        $em = $this->getDoctrine()->getManager();
        foreach ($panierr as $id => $quantity)
        {

            $panierWithDatar[] = [
                'product'=> $em->getRepository(Product::class)->find($id),
                'quantity'=>$quantity
            ];
        }


        foreach ($panierWithDatar as $item)
        {
            $prodCom = new ProductOrder() ;
            $prodCom->setNameProduct($item['product']->getName());
            $prodCom->setQuantity($item['quantity']);
            $prodCom->setOrderId($idCommande);
            $entityManager->persist($prodCom);
            $entityManager->flush();

        }

        $session->clear();

        return $this->render('product_front/list.html.twig', array(
            'products' => $products,
        ));

    }

    /**
     * @Route("/archive", name="archive")
     */
    public function archiveCommandeAction()
    {

        $user = $this->getUser();
        $idClient=$user->getId();
        $em = $this->getDoctrine()->getManager();
        $archives = $em->getRepository(Order::class)->findBy(array('userId' => $idClient));

        return $this->render('produit/ArchiveCommandes.html.twig', array(
            'archives' => $archives,
        ));
    }


}
