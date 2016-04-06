<?php
// src/Acme/TaskBundle/Entity/Name.php
namespace Acme\TaskBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
 
class Name
{
	

	//	First Name

    protected $name;
 

	//	Last Name

    protected $lastName;
     
	/**
     * @Assert\Type(type="Acme\TaskBundle\Entity\Address")
     */
	protected $address;
	
	protected $password;
	
	
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
 
    public function getLastName()
    {
        return $this->lastName;
    }
 
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }
	
	    public function getAddress()
    {
        return $this->address;
    }
 
    public function setAddress(Address $address = null)
    {
        $this->address = $address;
    }
	
	
	public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
}