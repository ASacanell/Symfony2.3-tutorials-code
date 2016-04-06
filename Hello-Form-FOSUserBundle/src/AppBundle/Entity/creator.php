<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="creator")
 */
class creator
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
	protected $creator_name;
	
    /**
     * @ORM\ManyToMany(targetEntity="comic", mappedBy="creators")
	* @ORM\JoinTable(name="creators_comics")
     */
    private $comics;

    public function __construct() {
        $this->comics = new \Doctrine\Common\Collections\ArrayCollection();
    }

    // ...
}