<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Products;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends Controller
{
    /**
     *@Route("/category/{id}", name="category")
     */

    public function ShowCategoryAction($id)
    {
        $products_arr = $this->getDoctrine()->getRepository(Products::class)->findBy(array('category' => $id, 'active' => 1));

        if (!$products_arr) {
            throw $this->createNotFoundException('No prod found');
        }

        return  $this->render('homepage/category.html.twig',array('products_arr' => $products_arr));
    }
}
?>