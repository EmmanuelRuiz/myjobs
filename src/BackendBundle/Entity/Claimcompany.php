<?php

namespace BackendBundle\Entity;

/**
 * Claimcompany
 */
class Claimcompany
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $businessemail;

    /**
     * @var string
     */
    private $officenumber;

    /**
     * @var string
     */
    private $personalnumber;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \BackendBundle\Entity\Companies
     */
    private $company;

    /**
     * @var \BackendBundle\Entity\Users
     */
    private $user;


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
     *
     * @return Claimcompany
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
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Claimcompany
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Claimcompany
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set businessemail
     *
     * @param string $businessemail
     *
     * @return Claimcompany
     */
    public function setBusinessemail($businessemail)
    {
        $this->businessemail = $businessemail;

        return $this;
    }

    /**
     * Get businessemail
     *
     * @return string
     */
    public function getBusinessemail()
    {
        return $this->businessemail;
    }

    /**
     * Set officenumber
     *
     * @param string $officenumber
     *
     * @return Claimcompany
     */
    public function setOfficenumber($officenumber)
    {
        $this->officenumber = $officenumber;

        return $this;
    }

    /**
     * Get officenumber
     *
     * @return string
     */
    public function getOfficenumber()
    {
        return $this->officenumber;
    }

    /**
     * Set personalnumber
     *
     * @param string $personalnumber
     *
     * @return Claimcompany
     */
    public function setPersonalnumber($personalnumber)
    {
        $this->personalnumber = $personalnumber;

        return $this;
    }

    /**
     * Get personalnumber
     *
     * @return string
     */
    public function getPersonalnumber()
    {
        return $this->personalnumber;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Claimcompany
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set company
     *
     * @param \BackendBundle\Entity\Companies $company
     *
     * @return Claimcompany
     */
    public function setCompany(\BackendBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \BackendBundle\Entity\Companies
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\Users $user
     *
     * @return Claimcompany
     */
    public function setUser(\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\Users
     */
    public function getUser()
    {
        return $this->user;
    }
}

