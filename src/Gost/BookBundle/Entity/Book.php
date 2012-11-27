<?php

namespace Gost\BookBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Gost\BookBundle\Entity\Book
 *
 * @ORM\Table(name = "Book_forms")
 * @ORM\Entity(repositoryClass="Gost\BookBundle\Entity\BookRepository")
 */
class Book
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $name
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string $email
     *
     * @Assert\NotBlank()
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string $texts
     *
     * @Assert\NotBlank()
     *
     * @Assert\MinLength(100)
     *
     * @ORM\Column(name="texts", type="text")
     */
    private $texts;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Book
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

    /**
     * Set email
     *
     * @param string $email
     * @return Book
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set texts
     *
     * @param string $texts
     * @return Book
     */
    public function setTexts($texts)
    {
        $this->texts = $texts;
    
        return $this;
    }

    /**
     * Get texts
     *
     * @return string 
     */
    public function getTexts()
    {
        return $this->texts;
    }
}
