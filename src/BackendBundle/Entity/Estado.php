<?php


namespace BackendBundle\Entity;

/**
 *  Estado
 */
class Estado {
		
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $claveEstado;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $abreviatura;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Estado
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set claveEstado
     *
     * @param integer $claveEstado
     *
     * @return Estado
     */
    public function setClaveEstado($claveEstado)
    {
        $this->claveEstado = $claveEstado;

        return $this;
    }

    /**
     * Get claveEstado
     *
     * @return integer
     */
    public function getClaveEstado()
    {
        return $this->claveEstado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Estado
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set abreviatura
     *
     * @param string $abreviatura
     *
     * @return Estado
     */
    public function setAbreviatura($abreviatura)
    {
        $this->abreviatura = $abreviatura;

        return $this;
    }

    /**
     * Get abreviatura
     *
     * @return string
     */
    public function getAbreviatura()
    {
        return $this->abreviatura;
    }
}
