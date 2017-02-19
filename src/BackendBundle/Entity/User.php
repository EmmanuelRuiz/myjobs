<?php

namespace BackendBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
/**
 * User
 */
class User implements UserInterface
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
    private $plastname;

    /**
     * @var string
     */
    private $mlastname;



    /**
     * @var integer
     */
    private $age;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $telephone;

    /**
     * @var string
     */
    private $password;

    /**
     * @var \DateTime
     */
    private $connection;

    /**
     * @var string
     */
    private $biography;

    /**
     * @var string
     */
    private $image;

    /**
     * @var string
     */
    private $termscondition;

    /**
     * @var \DateTime
     */
    private $datejob;

    /**
     * @var string
     */
    private $privacy;

    /**
     * @var string
     */
    private $role;

    /**
     * @var string
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @var \DateTime
     */
    private $updatedAt;

	/*que campo de la base de datos va a ser el username*/
	public function getUsername(){
		return $this->email;
	}
	/*obtener la salt */
	public function getSalt(){
		return null;
	}
	/*nos permite devolver el rol del usuario*/
	public function getRoles(){
		return array('ROLE_USER', 'ROLE_ADMIN');
	}
	
	public function eraseCredentials(){

	}

	/*cuando usemos un objeto como si fuera estring esto lo va a tratar como si fuera entero*/
	public function __toString() {
		return $this->name;
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

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
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
     * Set plastname
     *
     * @param string $plastname
     *
     * @return User
     */
    public function setPlastname($plastname)
    {
        $this->plastname = $plastname;

        return $this;
    }

    /**
     * Get plastname
     *
     * @return string
     */
    public function getPlastname()
    {
        return $this->plastname;
    }

    /**
     * Set mlastname
     *
     * @param string $mlastname
     *
     * @return User
     */
    public function setMlastname($mlastname)
    {
        $this->mlastname = $mlastname;

        return $this;
    }

    /**
     * Get mlastname
     *
     * @return string
     */
    public function getMlastname()
    {
        return $this->mlastname;
    }


    /**
     * Set age
     *
     * @param integer $age
     *
     * @return User
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
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
     * Set telephone
     *
     * @param string $telephone
     *
     * @return User
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
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
     * Set connection
     *
     * @param \DateTime $connection
     *
     * @return User
     */
    public function setConnection($connection)
    {
        $this->connection = $connection;

        return $this;
    }

    /**
     * Get connection
     *
     * @return \DateTime
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * Set biography
     *
     * @param string $biography
     *
     * @return User
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;

        return $this;
    }

    /**
     * Get biography
     *
     * @return string
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set termscondition
     *
     * @param string $termscondition
     *
     * @return User
     */
    public function setTermscondition($termscondition)
    {
        $this->termscondition = $termscondition;

        return $this;
    }

    /**
     * Get termscondition
     *
     * @return string
     */
    public function getTermscondition()
    {
        return $this->termscondition;
    }

    /**
     * Set datejob
     *
     * @param \DateTime $datejob
     *
     * @return User
     */
    public function setDatejob($datejob)
    {
        $this->datejob = $datejob;

        return $this;
    }

    /**
     * Get datejob
     *
     * @return \DateTime
     */
    public function getDatejob()
    {
        return $this->datejob;
    }

    /**
     * Set privacy
     *
     * @param string $privacy
     *
     * @return User
     */
    public function setPrivacy($privacy)
    {
        $this->privacy = $privacy;

        return $this;
    }

    /**
     * Get privacy
     *
     * @return string
     */
    public function getPrivacy()
    {
        return $this->privacy;
    }

    /**
     * Set role
     *
     * @param string $role
     *
     * @return User
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set active
     *
     * @param string $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
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
     * @return User
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
     * @var string
     */
    private $anonimo;


    /**
     * Set anonimo
     *
     * @param string $anonimo
     *
     * @return User
     */
    public function setAnonimo($anonimo)
    {
        $this->anonimo = $anonimo;

        return $this;
    }

    /**
     * Get anonimo
     *
     * @return string
     */
    public function getAnonimo()
    {
        return $this->anonimo;
    }
}
