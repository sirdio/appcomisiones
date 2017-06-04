<?php

namespace AppBundle\Entity;

/**
 * Torre
 */
class Torre
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombret;

    /**
     * @var string
     */
    private $descripciont;

    /**
     * @var \AppBundle\Entity\Usuario
     */
    private $usuario;


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
     * Set nombret
     *
     * @param string $nombret
     *
     * @return Torre
     */
    public function setNombret($nombret)
    {
        $this->nombret = $nombret;

        return $this;
    }

    /**
     * Get nombret
     *
     * @return string
     */
    public function getNombret()
    {
        return $this->nombret;
    }

    /**
     * Set descripciont
     *
     * @param string $descripciont
     *
     * @return Torre
     */
    public function setDescripciont($descripciont)
    {
        $this->descripciont = $descripciont;

        return $this;
    }

    /**
     * Get descripciont
     *
     * @return string
     */
    public function getDescripciont()
    {
        return $this->descripciont;
    }

    /**
     * Set usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Torre
     */
    public function setUsuario(\AppBundle\Entity\Usuario $usuario = null)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
}

