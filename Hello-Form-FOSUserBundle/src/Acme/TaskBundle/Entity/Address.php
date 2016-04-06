<?php
// src/Acme/TaskBundle/Entity/Address.php
namespace Acme\TaskBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
 
class Address
{
    /**
     * @Assert\NotBlank()
     */
    protected $street;
	
	/**
     * @Assert\NotBlank()
     */
    protected $number;

 
    public function getNumber()
    {
        return $this->number;
    }
    public function setNumber($number)
    {
        $this->number = $number;
    }
	
	public function getStreet()
    {
        return $this->street;
    }
    public function setStreet($street)
    {
        $this->street = $street;
    }
 
}