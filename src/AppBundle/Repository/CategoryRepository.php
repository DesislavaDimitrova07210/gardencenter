<?php
namespace AppBundle\Repository;

use Symfony\Component\Routing\Annotation\Route;

class CategoryRepository extends \Doctrine\ORM\EntityRepository
{

    public function getAllCategories()
    {
        return $this->createQueryBuilder('category')->getQuery()->getResult();

    }
}
