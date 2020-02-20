<?php

namespace BinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * abscense
 *
 * @ORM\Table(name="abscense")
 * @ORM\Entity(repositoryClass="BinBundle\Repository\abscenseRepository")
 */
class abscense
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
     * @ORM\Column(name="pupl", type="string", length=255)
     */
    private $pupl;

    /**
     * @var int
     *
     * @ORM\Column(name="nbr", type="integer")
     */
    private $nbr;

    /**
     * @return mixed
     */
    public function getSubjectt()
    {
        return $this->subjectt;
    }

    /**
     * @param mixed $subjectt
     */
    public function setSubjectt($subjectt)
    {
        $this->subjectt = $subjectt;
    }

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;
    /**
     * @ORM\ManyToOne(targetEntity="abscense",inversedBy="subjectt")
     * @ORM\JoinColumn(name="subjectt_id",referencedColumnName="id")
     */
    private $subjectt;

    /**
     * @return mixed
     */
    public function getPupil()
    {
        return $this->pupil;
    }

    /**
     * @param mixed $pupil
     */
    public function setPupil($pupil)
    {
        $this->pupil = $pupil;
    }



    /**
     *
     * @ORM\ManyToOne(targetEntity="pupil")
     * @ORM\JoinColumn(name="pupil_id",referencedColumnName="id")
     */
    private $pupil;

    /**
     * @var string
     *
     * @ORM\Column(name="groupe", type="string", length=255)
     */
    private $groupe;

    /**
     * @return mixed
     */
    public function getGroupee()
    {
        return $this->groupee;
    }

    /**
     * @param mixed $groupee
     */
    public function setGroupee($groupee)
    {
        $this->groupee = $groupee;
    }
    /**
     * @ORM\ManyToOne(targetEntity="abscense",inversedBy="groupee")
     * @ORM\JoinColumn(name="groupee_id",referencedColumnName="id")
     */
    private $groupee;

    /**
     * @return string
     */
    public function getGroupe()
    {
        return $this->groupe;
    }

    /**
     * @param string $groupe
     */
    public function setGroupe($groupe)
    {
        $this->groupe = $groupe;
    }
    /**
     * @var string
     *
     * @ORM\Column(name="subject", type="string", length=255)
     */
    private $subject;
    /**
     *
     * @ORM\ManyToOne(targetEntity="notification")
     * @ORM\JoinColumn(name="notification_id",referencedColumnName="id")
     */

private $notification;

    /**
     * @return mixed
     */
    public function getNotification()
    {
        return $this->notification;
    }

    /**
     * @param mixed $notification
     */
    public function setNotification($notification)
    {
        $this->notification = $notification;
    }



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
        return $this->pupl;
    }

    /**
     * Set pupl
     *
     * @param string $pupl
     *
     * @return abscense
     */
    public function setPupl($pupl)
    {
        $this->pupl = $pupl;

        return $this;
    }

    /**
     * Get pupl
     *
     * @return string
     */
    public function getPupl()
    {
        return $this->pupl;
    }

    /**
     * Set nbr
     *
     * @param integer $nbr
     *
     * @return abscense
     */
    public function setNbr($nbr)
    {
        $this->nbr = $nbr;

        return $this;
    }

    /**
     * Get nbr
     *
     * @return int
     */
    public function getNbr()
    {
        return $this->nbr;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return abscense
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set subject
     *
     * @param string $subject
     *
     * @return abscense
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }

    /**
     * Get subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

}

