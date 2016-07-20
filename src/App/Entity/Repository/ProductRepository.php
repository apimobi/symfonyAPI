<?php
namespace App\Entity\Repository;

use Doctrine\ORM\EntityRepository;

class ProductRepository extends EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('datecreated' => 'DESC'));
    }
}



?>
