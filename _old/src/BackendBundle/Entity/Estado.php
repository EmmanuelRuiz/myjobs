<?php

namespace BackendBundle\Entity;

/**
 * Description of Estado
 *
 * @author Juan Amaya
 */
class Estado {
	//put your code here
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $clave;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $abrev;

    /**
     * @var boolean
     */
    private $activo = '1';


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
     * Set clave
     *
     * @param string $clave
     *
     * @return Estado
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
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
     * Set abrev
     *
     * @param string $abrev
     *
     * @return Estado
     */
    public function setAbrev($abrev)
    {
        $this->abrev = $abrev;

        return $this;
    }

    /**
     * Get abrev
     *
     * @return string
     */
    public function getAbrev()
    {
        return $this->abrev;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Estado
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean
     */
    public function getActivo()
    {
        return $this->activo;
    }
}
