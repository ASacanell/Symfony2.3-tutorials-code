<?php

namespace Acme\StoreBundle\Controller;
use Acme\StoreBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{	
	public function createAction()
	{
		$em = $this->getDoctrine()->getManager();
		$products = $em->getRepository('AcmeStoreBundle:Product')
               ->findAllOrderedByName();
		
		if (!$products) {
			throw $this->createNotFoundException(
				'No products found'
			);
		}
	 
		return new Response(var_dump($products));
	}
}
