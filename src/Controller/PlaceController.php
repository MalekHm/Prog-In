<?php

namespace App\Controller;

use App\Entity\CategoryPlace;
use App\Entity\Media;
use App\Entity\Place;
use App\Form\FormEditType;
use App\Form\PlaceAddType;
use App\Repository\CategoryPlaceRepository;
use App\Repository\PlaceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
 * @Route("/admin/places")
 */
class PlaceController extends AbstractController
{
    /**
     * @Route("/", name="place_index")
     */
    public function index(): Response
    {
        return $this->render('place/index.html.twig', [
            'controller_name' => 'PlaceController',
        ]);
    }
    /**
     * @Route("/listplace", name="place")
    */
    public function list()
    {
        $places=$this->getDoctrine()->getRepository(Place::class)->findAll();
        $categories=$this->getDoctrine()->getRepository(CategoryPlace::class)->findAll();
        return $this->render('place/list.html.twig', [
            'places' => $places,
            'categories'=> $categories,
        ]);
    }


    /**
     * @Route("/list/placecategory/{id}", name="place_listcategory")
     */
    public function listCategory($id, CategoryPlaceRepository $repository): Response
    {

        $category = $this->getDoctrine()
            ->getRepository(CategoryPlace::class)
            ->find($id);

        $place = $category->getPlaces();
        return $this->render('place/list.html.twig', [
            'places' => $place,
            'categories'=> $category,
        ]);
    }



    /**
     * @Route("/placeadd", name="place_add")
     * @param Request $request
     */
    public function add(Request $request)
    {
        $place = new Place();
        $form = $this->createForm(PlaceAddType::class,$place);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            // on recupere les images transmises
            $images=$form->get('media')->getData();
            //on boucle sur les images
            foreach($images as $image){
                //on genere un nv nom de fichier
                $fichier =md5(uniqid()) . '.'. $image->guessExtension();

                // on va copier le fichier dans le dossier uploads
                $image->move(
                  $this->getParameter('images_directory'),
                  $fichier
                );

                // On stock l image dans la base de donnees (son nom)
                $img = new Media();
                $img->setImagePlace($fichier);
                $place->addMedium($img);
            }
            /** @var UploadedFile $uploadedFile */
            $uploadedFile=$form["picturePlace"]->getData();
            $destination=$this->getParameter('kernel.project_dir')."/public/uploads";
            $originalFilename=pathinfo($uploadedFile->getClientOriginalName(),PATHINFO_FILENAME);
            $newfilename=$originalFilename.'-'.uniqid().".".$uploadedFile->guessExtension();
            $uploadedFile->move($destination,$newfilename);
            $place->setPicturePlace($newfilename);
            $manager=$this->getDoctrine()->getManager();
            $manager->persist($place);
            $manager->flush();
           return $this->redirectToRoute('place');
        }
        return $this->render('place/add.html.twig', [
            'form' => $form->createView()
        ]);


    }
    /**
     * @Route("/update/{id}", name="place_update")
     */
    public function edit(Request $request, Place $place): Response
    {
        $form = $this->createForm(FormEditType::class, $place);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // on recupere les images transmises
            $images=$form->get('media')->getData();
            //on boucle sur les images
            foreach($images as $image){
                //on genere un nv nom de fichier
                $fichier =md5(uniqid()) . '.'. $image->guessExtension();
                // on va copier le fichier dans le dossier uploads
                $image->move(
                    $this->getParameter('images_directory'),
                    $fichier
                );
                // On stock l image dans la base de donnees (son nom)
                $img = new Media();
                $img->setImagePlace($fichier);
                $place->addMedium($img);
            }


            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('place');
        }

        return $this->render('place/update.html.twig', [
            'place' => $place,
            'form' => $form->createView(),
        ]);
    }
    /**
     * @Route("/delete/{id}", name="place_delete")
     */
    public function delete($id,PlaceRepository $repository): Response
    {
        $place = $repository->find($id);
        $em = $this->getDoctrine()->getManager();

        $em->remove($place);

        $em->flush();
        return $this->redirectToRoute('place');
    }


    /**
     * @Route("/supprime/image/{id}", name="place_delete_image", methods={"DELETE"})
     */
    public function deletepicture(Media $image,Request $request){
        $data=json_decode($request->getContent(),true);
       // on verifie si le token est valide
        if($this->isCsrfTokenValid('delete'.$image->getId(),$data['_token'])){
            //on recupere le nom de l image
            $nom =$image->getImagePlace();
            // on supprime le fichier
            unlink($this->getParameter('images_directory').'/'.$nom);
            //on supprime l 'entree de la base
            $em=$this->getDoctrine()->getManager();
            $em->remove($image);
            $em->flush();
            // on repond en json
            return new JsonResponse(['success'=>1]);
        }else{
            return new JsonResponse(['error'=>'Token Invalide'],400);
        }
    }
}
