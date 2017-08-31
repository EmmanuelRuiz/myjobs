<?php

namespace BackendBundle\Entity;

/**
 * Opinion
 */
class Opinion
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $generalcomment;

    /**
     * @var string
     */
    private $point1;

    /**
     * @var string
     */
    private $point2;

    /**
     * @var string
     */
    private $point3;

    /**
     * @var string
     */
    private $point4;

    /**
     * @var string
     */
    private $point5;

    /**
     * @var string
     */
    private $point6;

    /**
     * @var string
     */
    private $point7;

    /**
     * @var string
     */
    private $point8;

    /**
     * @var string
     */
    private $point9;

    /**
     * @var string
     */
    private $point10;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

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
     * Set generalcomment
     *
     * @param string $generalcomment
     *
     * @return Opinion
     */
    public function setGeneralcomment($generalcomment)
    {
        $this->generalcomment = $generalcomment;

        return $this;
    }

    /**
     * Get generalcomment
     *
     * @return string
     */
    public function getGeneralcomment()
    {
        return $this->generalcomment;
    }

    /**
     * Set point1
     *
     * @param string $point1
     *
     * @return Opinion
     */
    public function setPoint1($point1)
    {
        $this->point1 = $point1;

        return $this;
    }

    /**
     * Get point1
     *
     * @return string
     */
    public function getPoint1()
    {
        return $this->point1;
    }

    /**
     * Set point2
     *
     * @param string $point2
     *
     * @return Opinion
     */
    public function setPoint2($point2)
    {
        $this->point2 = $point2;

        return $this;
    }

    /**
     * Get point2
     *
     * @return string
     */
    public function getPoint2()
    {
        return $this->point2;
    }

    /**
     * Set point3
     *
     * @param string $point3
     *
     * @return Opinion
     */
    public function setPoint3($point3)
    {
        $this->point3 = $point3;

        return $this;
    }

    /**
     * Get point3
     *
     * @return string
     */
    public function getPoint3()
    {
        return $this->point3;
    }

    /**
     * Set point4
     *
     * @param string $point4
     *
     * @return Opinion
     */
    public function setPoint4($point4)
    {
        $this->point4 = $point4;

        return $this;
    }

    /**
     * Get point4
     *
     * @return string
     */
    public function getPoint4()
    {
        return $this->point4;
    }

    /**
     * Set point5
     *
     * @param string $point5
     *
     * @return Opinion
     */
    public function setPoint5($point5)
    {
        $this->point5 = $point5;

        return $this;
    }

    /**
     * Get point5
     *
     * @return string
     */
    public function getPoint5()
    {
        return $this->point5;
    }

    /**
     * Set point6
     *
     * @param string $point6
     *
     * @return Opinion
     */
    public function setPoint6($point6)
    {
        $this->point6 = $point6;

        return $this;
    }

    /**
     * Get point6
     *
     * @return string
     */
    public function getPoint6()
    {
        return $this->point6;
    }

    /**
     * Set point7
     *
     * @param string $point7
     *
     * @return Opinion
     */
    public function setPoint7($point7)
    {
        $this->point7 = $point7;

        return $this;
    }

    /**
     * Get point7
     *
     * @return string
     */
    public function getPoint7()
    {
        return $this->point7;
    }

    /**
     * Set point8
     *
     * @param string $point8
     *
     * @return Opinion
     */
    public function setPoint8($point8)
    {
        $this->point8 = $point8;

        return $this;
    }

    /**
     * Get point8
     *
     * @return string
     */
    public function getPoint8()
    {
        return $this->point8;
    }

    /**
     * Set point9
     *
     * @param string $point9
     *
     * @return Opinion
     */
    public function setPoint9($point9)
    {
        $this->point9 = $point9;

        return $this;
    }

    /**
     * Get point9
     *
     * @return string
     */
    public function getPoint9()
    {
        return $this->point9;
    }

    /**
     * Set point10
     *
     * @param string $point10
     *
     * @return Opinion
     */
    public function setPoint10($point10)
    {
        $this->point10 = $point10;

        return $this;
    }

    /**
     * Get point10
     *
     * @return string
     */
    public function getPoint10()
    {
        return $this->point10;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Opinion
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
     * @return Opinion
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
     * Set company
     *
     * @param \BackendBundle\Entity\Company $company
     *
     * @return Opinion
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
     * @return Opinion
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
    /**
     * @var string
     */
    private $yesno;


    /**
     * Set yesno
     *
     * @param string $yesno
     *
     * @return Opinion
     */
    public function setYesno($yesno)
    {
        $this->yesno = $yesno;

        return $this;
    }

    /**
     * Get yesno
     *
     * @return string
     */
    public function getYesno()
    {
        return $this->yesno;
    }
}
