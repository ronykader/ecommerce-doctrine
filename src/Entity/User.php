<?php

namespace App\Entity;

use DateTimeImmutable;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */

class User
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     *
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     * 
     */
    private $username;

    /**
     * @ORM\Column(type="string")
     * 
     */
    private $password;

    /**
     * @ORM\Column(type="datetime", name="created_at")
     * @var \DateTimeInterface
     * 
     */
    private $createdAt;


    public function __construct()
    {
        $this->createdAt = new \DateTimeImmutable();
    }


    /**
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @param mixed $id
     * 
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


    /**
     *
     * @return mixed
     */
    public function getUsername(): string
    {
        return $this->username;
    }


    /**
     * @param mixed $username
     * 
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }



    /**
     *
     * @return mixed
     */
    public function getPassword(): string
    {
        return $this->password;
    }


    /**
     * @param mixed $password
     * 
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }


    /**
     *
     * @return \DateTimeInterface
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }


    /**
     * @param \DateTimeInterface $createdAt
     * 
     */
    public function setCreatedAt($createdAt): void
    {
        $this->createdAt = $createdAt;
    }
}
