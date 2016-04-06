<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="comic")
 */
class comic
{
    // ...

	/**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
	
	/**
     * @ORM\Column(type="text")
     */
	protected $comic_name;
	
    /**
     * @ORM\ManyToMany(targetEntity="creator", inversedBy="comics")
     */
    private $creators;

    public function __construct() {
        $this->creators = new \Doctrine\Common\Collections\ArrayCollection();
    }

    // ...
}