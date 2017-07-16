<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BackendBundle\Entity;

/**
 * Description of Localidad
 *
 * @author Juan Amaya
 */
class Localidad {
	//put your code here
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $municipioId;

    /**
     * @var string
     */
    private $clave;

    /**
     * @var string
     */
    private $nombre;


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
     * Set municipioId
     *
     * @param integer $municipioId
     *
     * @return Localidad
     */
    public function setMunicipioId($municipioId)
    {
        $this->municipioId = $municipioId;

        return $this;
    }

    /**
     * Get municipioId
     *
     * @return integer
     */
    public function getMunicipioId()
    {
        return $this->municipioId;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Localidad
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
     * @return Localidad
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
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Localidad
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
