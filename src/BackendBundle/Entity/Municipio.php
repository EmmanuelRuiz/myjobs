<?php

namespace BackendBundle\Entity;

/**
 * Municipio
 */
class Municipio {
	
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $claveEstado;

    /**
     * @var integer
     */
    private $claveMunicipio;

    /**
     * @var string
     */
    private $nombre;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Municipio
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
     * @return Municipio
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
     * Set claveMunicipio
     *
     * @param integer $claveMunicipio
     *
     * @return Municipio
     */
    public function setClaveMunicipio($claveMunicipio)
    {
        $this->claveMunicipio = $claveMunicipio;

        return $this;
    }

    /**
     * Get claveMunicipio
     *
     * @return integer
     */
    public function getClaveMunicipio()
    {
        return $this->claveMunicipio;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Municipio
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
}
