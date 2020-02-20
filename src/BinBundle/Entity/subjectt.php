<?php

namespace BinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * subjectt
 *
 * @ORM\Table(name="subjectt")
 * @ORM\Entity(repositoryClass="BinBundle\Repository\subjecttRepository")
 */
class subjectt
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @return mixed
     */
    public function getAbscense()
    {
        return $this->abscense;
    }

    /**
     * @param mixed $abscense
     */
    public function setAbscense($abscense)
    {
        $this->abscense = $abscense;
    }
    /**
     * @ORM\OneToMany(targetEntity="abscense" , mappedBy="abscense")
     */
    private $abscense;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return $this->name;
    }
    /**
     * Set name
     *
     * @param string $name
     *
     * @return subjectt
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}

