<?php

namespace Sebou\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

class ContactRepository extends EntityRepository
{
  public function myFindAll()
  {
    return $this
      ->createQueryBuilder('*')
      ->getQuery()
      ->getResult()
    ;
  }
}
?>
