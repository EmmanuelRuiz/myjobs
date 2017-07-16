<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace BackendBundle\Entity;

/**
 * Description of Municipio
 *
 * @author Juan Amaya
 */
class Municipio {
	//put your code here
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $estadoId;

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
     * Set estadoId
     *
     * @param integer $estadoId
     *
     * @return Municipio
     */
    public function setEstadoId($estadoId)
    {
        $this->estadoId = $estadoId;

        return $this;
    }

    /**
     * Get estadoId
     *
     * @return integer
     */
    public function getEstadoId()
    {
        return $this->estadoId;
    }

    /**
     * Set clave
     *
     * @param string $clave
     *
     * @return Municipio
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

    /**
     * Set activo
     *
     * @param boolean $activo
     *
     * @return Municipio
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
