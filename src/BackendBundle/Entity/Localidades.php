<?php


namespace BackendBundle\Entity;

/**
 * Description of Localidades
 *
 * @author Juan Amaya
 */
class Localidades {
	//put your code here
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
     * @var integer
     */
    private $claveLocalidad;

    /**
     * @var string
     */
    private $nombre;


    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Localidades
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
     * @return Localidades
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
     * @return Localidades
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
     * Set claveLocalidad
     *
     * @param integer $claveLocalidad
     *
     * @return Localidades
     */
    public function setClaveLocalidad($claveLocalidad)
    {
        $this->claveLocalidad = $claveLocalidad;

        return $this;
    }

    /**
     * Get claveLocalidad
     *
     * @return integer
     */
    public function getClaveLocalidad()
    {
        return $this->claveLocalidad;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Localidades
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
