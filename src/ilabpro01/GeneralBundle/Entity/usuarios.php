<?php

namespace ilabpro01\GeneralBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


/**
 * @ORM\Entity
 * @ORM\Table(name="usuarios")
 * 
 */
class usuarios {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $sitio;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $ciudad;
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $fotografo;
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $nombre;
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $apellido;
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $email;
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $fechaAlta;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $contrasenia;
    
    
    public function __toString() {
        return $nom = $this->getNombre();
    }
    

    /**
     * Set sitio
     *
     * @param string $sitio
     * @return usuarios
     */
    public function setSitio($sitio)
    {
        $this->sitio = $sitio;

        return $this;
    }

    /**
     * Get sitio
     *
     * @return string 
     */
    public function getSitio()
    {
        return $this->sitio;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return usuarios
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;

        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set fotografo
     *
     * @param string $fotografo
     * @return usuarios
     */
    public function setFotografo($fotografo)
    {
        $this->fotografo = $fotografo;

        return $this;
    }

    /**
     * Get fotografo
     *
     * @return string 
     */
    public function getFotografo()
    {
        return $this->fotografo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return usuarios
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
     * Set apellido
     *
     * @param string $apellido
     * @return usuarios
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return usuarios
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
     * Set fechaAlta
     *
     * @param string $fechaAlta
     * @return usuarios
     */
    public function setFechaAlta($fechaAlta)
    {
        $this->fechaAlta = $fechaAlta;

        return $this;
    }

    /**
     * Get fechaAlta
     *
     * @return string 
     */
    public function getFechaAlta()
    {
        return $this->fechaAlta;
    }

    /**
     * Set contrasenia
     *
     * @param string $contrasenia
     * @return usuarios
     */
    public function setContrasenia($contrasenia)
    {
        $this->contrasenia = $contrasenia;

        return $this;
    }

    /**
     * Get contrasenia
     *
     * @return string 
     */
    public function getContrasenia()
    {
        return $this->contrasenia;
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
}
