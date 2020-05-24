<?php
namespace AppBundle\Repository;

use Symfony\Component\Routing\Annotation\Route;

/**
 * ProductsRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductsRepository extends \Doctrine\ORM\EntityRepository
{
    public function getAllProducts($id)
    {
        return $this->findBy(array(), array('category_id' => $id));
    }
}