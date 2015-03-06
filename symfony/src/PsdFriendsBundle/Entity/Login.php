<?php

namespace PsdFriendsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Login
 */
class Login
{
    /**
     * @var string
     * @Assert\NotBlank()
     * @Assert\LessThan(value=50)
     * @Assert\Regex(
     * patter="/[a-zA-Z0-9\_\-]+[a-zA-Z0-9\.\_\-]*@([a-zA-Z0-9\_\-]+\.)+([a-zA-Z]{2,4}|travel|museum)$/",
     * message:"E-mail is not valid"
     * )
     */
    
    private $eMail;

    /**
     * @var string
     * @Assert\NotBlank(
     * message= "Compulsory"
     * )
     * @Assert\Length(
     * min=6,
     * max=15,
     * message="Password should be between 6-15" 
     * )
     * 
     */
    private $password;

    /**
     * @var integer
     * 
     */
    private $id;


    /**
     * Set eMail
     *
     * @param string $eMail
     * @return Login
     * 
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string 
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Login
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
