<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends EntityRepository
{
	public function findAllOrderedByName()
		{
			$em = $this->getEntityManager();
			$query = $em->createQuery('
				SELECT p 
				FROM AcmeStoreBundle:Product p 
				ORDER BY p.name ASC'
			);
		
			$products = $query->getResult();
			
			return $products;
		}
}
