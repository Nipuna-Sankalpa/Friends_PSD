<?php

namespace PsdFriendsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Profile
 */
class Profile
{
    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $fName;

    /**
     * @var string
     */
    private $lName;

    /**
     * @var string
     */
    private $school;

    /**
     * @var string
     */
    private $higherEdu;

    /**
     * @var string
     */
    private $home;

    /**
     * @var string
     */
    private $dob;

    /**
     * @var string
     */
    private $description;

    /**
     * @var integer
     */
    private $mobile;

    /**
     * @var string
     */
    private $img;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set email
     *
     * @param string $email
     * @return Profile
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
     * Set fName
     *
     * @param string $fName
     * @return Profile
     */
    public function setFName($fName)
    {
        $this->fName = $fName;

        return $this;
    }

    /**
     * Get fName
     *
     * @return string 
     */
    public function getFName()
    {
        return $this->fName;
    }

    /**
     * Set lName
     *
     * @param string $lName
     * @return Profile
     */
    public function setLName($lName)
    {
        $this->lName = $lName;

        return $this;
    }

    /**
     * Get lName
     *
     * @return string 
     */
    public function getLName()
    {
        return $this->lName;
    }

    /**
     * Set school
     *
     * @param string $school
     * @return Profile
     */
    public function setSchool($school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return string 
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set higherEdu
     *
     * @param string $higherEdu
     * @return Profile
     */
    public function setHigherEdu($higherEdu)
    {
        $this->higherEdu = $higherEdu;

        return $this;
    }

    /**
     * Get higherEdu
     *
     * @return string 
     */
    public function getHigherEdu()
    {
        return $this->higherEdu;
    }

    /**
     * Set home
     *
     * @param string $home
     * @return Profile
     */
    public function setHome($home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return string 
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set dob
     *
     * @param string $dob
     * @return Profile
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return string 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Profile
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set mobile
     *
     * @param integer $mobile
     * @return Profile
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return integer 
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return Profile
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
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
