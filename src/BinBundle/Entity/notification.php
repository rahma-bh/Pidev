<?php

namespace BinBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * notification
 *
 * @ORM\Table(name="notification")
 * @ORM\Entity(repositoryClass="BinBundle\Repository\notificationRepository")
 */
class notification
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
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @return mixed
     */
    public function getCategoryy()
    {
        return $this->categoryy;
    }

    /**
     * @param mixed $categoryy
     */
    public function setCategoryy($categoryy)
    {
        $this->categoryy = $categoryy;
    }
    /**
     * @ORM\ManyToOne(targetEntity="notification",inversedBy="categoryy")
     * @ORM\JoinColumn(name="categoryy_id",referencedColumnName="id")
     */
    private $categoryy;

    /**
     * @var string
     *
     * @ORM\Column(name="sender", type="string", length=255)
     */
    private $sender;

    /**
     * @return mixed
     */
    public function getTeacher()
    {
        return $this->teacher;
    }

    /**
     * @param mixed $teacher
     */
    public function setTeacher($teacher)
    {
        $this->teacher = $teacher;
    }
    /**
     * @ORM\ManyToOne(targetEntity="notification",inversedBy="teacher")
     * @ORM\JoinColumn(name="teacher_id",referencedColumnName="id")
     */
    private $teacher;
    /**
     * @var bool
     *
     * @ORM\Column(name="state", type="boolean")
     */
    private $state;

    /**
     * @return bool
     */
    public function isState()
    {
        return $this->state;
    }

    /**
     * @param bool $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }



    /**
     * @var string
     *
     * @ORM\Column(name="receiver", type="string", length=255)
     */
    private $receiver;
    /**
     * @ORM\ManyToOne(targetEntity="notification",inversedBy="parentt")
     * @ORM\JoinColumn(name="parentt_id",referencedColumnName="id")
     */
    private $parentt;

    /**
     * @return mixed
     */
    public function getParentt()
    {
        return $this->parentt;
    }

    /**
     * @param mixed $parentt
     */
    public function setParentt($parentt)
    {
        $this->parentt = $parentt;
    }

    /**
     * @return mixed
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * @param mixed $parent
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    }
    /**
     * @ORM\ManyToOne(targetEntity="notification",inversedBy="parent")
     * @ORM\JoinColumn(name="parent_id",referencedColumnName="id")
     */
    private $parent;
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return notification
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set sender
     *
     * @param string $sender
     *
     * @return notification
     */
    public function setSender($sender)
    {
        $this->sender = $sender;

        return $this;
    }

    /**
     * Get sender
     *
     * @return string
     */
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * Set receiver
     *
     * @param string $receiver
     *
     * @return notification
     */
    public function setReceiver($receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * Get receiver
     *
     * @return string
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return notification
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}

