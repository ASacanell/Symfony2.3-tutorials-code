<?php
	// src/AppBundle/EventListener/ExceptionListener.php
namespace AppBundle\EventListener;

use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManager;
use Acme\StoreBundle\Entity\Product;


class RequestListener
{
	/**
	*
     * @var EntityManager 
     */
    protected $em;

    public function __construct(EntityManager $entityManager)
	{
		$this->em = $entityManager;
	}
	
	
	public function onKernelRequest(GetResponseEvent $event)
	{
		//Prueba
		$product = new Product();
		
		$product->setName('Barsa');
		$product->setPrice('10');
		$product->setDescription('Mierda');
		
		$this->em->persist($product);
		$this->em->flush();
	}
}