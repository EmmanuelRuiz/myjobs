<?php

namespace BackendBundle\Entity;

/**
 * Companies
 */
class Company
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $tradename;

    /**
     * @var string
     */
    private $businessname;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $businesssector;

    /**
     * @var string
     */
    private $representant;

    /**
     * @var string
     */
    private $contacname;

    /**
     * @var string
     */
    private $contactlastname;

    /**
     * @var string
     */
    private $position;

    /**
     * @var string
     */
    private $telephoneext;

    /**
     * @var string
     */
    private $businessemail;

    /**
     * @var string
     */
    private $personalnumber;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $document;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

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
     * Set tradename
     *
     * @param string $tradename
     *
     * @return Companies
     */
    public function setTradename($tradename)
    {
        $this->tradename = $tradename;

        return $this;
    }

    /**
     * Get tradename
     *
     * @return string
     */
    public function getTradename()
    {
        return $this->tradename;
    }

    /**
     * Set businessname
     *
     * @param string $businessname
     *
     * @return Companies
     */
    public function setBusinessname($businessname)
    {
        $this->businessname = $businessname;

        return $this;
    }

    /**
     * Get businessname
     *
     * @return string
     */
    public function getBusinessname()
    {
        return $this->businessname;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     *
     * @return Companies
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Companies
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Companies
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
     * Set businesssector
     *
     * @param string $businesssector
     *
     * @return Companies
     */
    public function setBusinesssector($businesssector)
    {
        $this->businesssector = $businesssector;

        return $this;
    }

    /**
     * Get businesssector
     *
     * @return string
     */
    public function getBusinesssector()
    {
        return $this->businesssector;
    }

    /**
     * Set representant
     *
     * @param string $representant
     *
     * @return Companies
     */
    public function setRepresentant($representant)
    {
        $this->representant = $representant;

        return $this;
    }

    /**
     * Get representant
     *
     * @return string
     */
    public function getRepresentant()
    {
        return $this->representant;
    }

    /**
     * Set contacname
     *
     * @param string $contacname
     *
     * @return Companies
     */
    public function setContacname($contacname)
    {
        $this->contacname = $contacname;

        return $this;
    }

    /**
     * Get contacname
     *
     * @return string
     */
    public function getContacname()
    {
        return $this->contacname;
    }

    /**
     * Set contactlastname
     *
     * @param string $contactlastname
     *
     * @return Companies
     */
    public function setContactlastname($contactlastname)
    {
        $this->contactlastname = $contactlastname;

        return $this;
    }

    /**
     * Get contactlastname
     *
     * @return string
     */
    public function getContactlastname()
    {
        return $this->contactlastname;
    }

    /**
     * Set position
     *
     * @param string $position
     *
     * @return Companies
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
     * Set telephoneext
     *
     * @param string $telephoneext
     *
     * @return Companies
     */
    public function setTelephoneext($telephoneext)
    {
        $this->telephoneext = $telephoneext;

        return $this;
    }

    /**
     * Get telephoneext
     *
     * @return string
     */
    public function getTelephoneext()
    {
        return $this->telephoneext;
    }

    /**
     * Set businessemail
     *
     * @param string $businessemail
     *
     * @return Companies
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
     * Set personalnumber
     *
     * @param string $personalnumber
     *
     * @return Companies
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
     * Set status
     *
     * @param string $status
     *
     * @return Companies
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set document
     *
     * @param string $document
     *
     * @return Companies
     */
    public function setDocument($document)
    {
        $this->document = $document;

        return $this;
    }

    /**
     * Get document
     *
     * @return string
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Companies
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
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     *
     * @return Companies
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\Users $user
     *
     * @return Companies
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

