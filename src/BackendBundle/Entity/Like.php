<?php

namespace BackendBundle\Entity;

/**
 * Like
 */
class Like
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BackendBundle\Entity\Company
     */
    private $company;

    /**
     * @var \BackendBundle\Entity\User
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
     * Set company
     *
     * @param \BackendBundle\Entity\Company $company
     *
     * @return Like
     */
    public function setCompany(\BackendBundle\Entity\Company $company = null)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return \BackendBundle\Entity\Company
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Set user
     *
     * @param \BackendBundle\Entity\User $user
     *
     * @return Like
     */
    public function setUser(\BackendBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \BackendBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}

