<?php


namespace App\Controller;

use App\Entity\Store;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AddProduct extends AbstractController
{
    /**
     * @Route("/product/{myProd}", name="create_product")
     * @param $myProd
     * @return Response
     */
    public function index($myProd) :Response
    {
        $entityManager = $this->getDoctrine()->getManager();
        $product = new Store();
        $product -> setName($myProd);
        $entityManager->persist($product);
        $entityManager->flush();
        return new Response($product -> getName().' id: ' .$product ->getId());
    }
}