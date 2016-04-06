<?php

namespace Acme\TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\TaskBundle\Entity\Name;
use Symfony\Component\HttpFoundation\Request;
use Acme\TaskBundle\Form\Type\NameType;


class DefaultController extends Controller
{
    public function newAction(Request $request)
    {
        // Creating the new user info
        $name= new Name();
        
		
		$form = $this->createForm(new NameType(), $name);
			
		$form->handleRequest($request);
		
		
		if ($form->isValid()) {
			//Following code is just to check that we have received the form inputs correctly.
			$firstName = $form["name"]->getData();
			$lastName = $form["lastName"]->getData();
			$street = $form["address"]["street"]->getData();
			$number = $form["address"]["number"]->getData();
			
			return $this->render('AcmeTaskBundle:Default:response.html.twig', array(
						'firstName' => $firstName, 'lastName' => $lastName, 'street' => $street, 'number' => $number,
					));	
		}else{
		return $this->render('AcmeTaskBundle:Default:new.html.twig', array(
					'form' => $form->createView(),
				));
		}
	}
}
