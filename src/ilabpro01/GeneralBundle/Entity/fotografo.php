<?php

namespace ilabpro01\GeneralBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


/**
 * @ORM\Entity
 * @ORM\Table(name="Fotografo")
 * 
 * @DoctrineAssert\UniqueEntity(fields = "email", message="El email ingresado corresponde a un usuario ya registrado.")
 * @DoctrineAssert\UniqueEntity(fields = "usuario", message="El usuario ingresado corresponde a un usuario ya registrado.")
 * 
 */
class fotografo {
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
    protected $idSitio;
    
        
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message = "El nombre es obligatorio")
     * @Assert\MaxLength(limit = 50, message = "El máximo número de caracteres es 50.")
     * 
     */
    protected $nombre;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message = "El apellido es obligatorio")
     * @Assert\MaxLength(limit = 50, message = "El máximo número de caracteres es 50.")
     * 
     */
    protected $apellido;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message = "El email es obligatorio")
     * @Assert\MaxLength(limit = 50, message = "El máximo número de caracteres es 50.")
     * 
     */
    protected $email;
    
    
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message = "El usuario es obligatorio")
     * @Assert\MaxLength(limit = 30, message = "El máximo número de caracteres es 30.")
     * 
     */
    protected $usuario;
    
    
    /**
     * @ORM\Column(type="string", length=30)
     * @Assert\NotBlank(message = "La contraseña es obligatoria")
     * @Assert\MaxLength(limit = 30, message = "El máximo número de caracteres es 30.")
     * 
     */
    protected $contrasenia;
    
    

    /**
     * @ORM\Column(type="string", length=20)
     * 
     */
    protected $telefono;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\MaxLength(limit = 50, message = "El máximo número de caracteres es 50.")
     * 
     */
    protected $estudio;
    
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $fechaAlta;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $idCiudad;
    
    
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $idPlanFotografo;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     */
    protected $idFormaPago;
    
    
    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     * 
     */
    protected $fechaInicioPlan;
    
    
    
       public function __toString() {
        return $nom = $this->getNombre();
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
     * Set idSitio
     *
     * @param string $idSitio
     * @return fotografo
     */
    public function setIdSitio($idSitio)
    {
        $this->idSitio = $idSitio;
    
        return $this;
    }

    /**
     * Get idSitio
     *
     * @return string 
     */
    public function getIdSitio()
    {
        return $this->idSitio;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return fotografo
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
     * @return fotografo
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
     * @return fotografo
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
     * Set usuario
     *
     * @param string $usuario
     * @return fotografo
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set contrasenia
     *
     * @param string $contrasenia
     * @return fotografo
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
     * Set telefono
     *
     * @param string $telefono
     * @return fotografo
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set estudio
     *
     * @param string $estudio
     * @return fotografo
     */
    public function setEstudio($estudio)
    {
        $this->estudio = $estudio;
    
        return $this;
    }

    /**
     * Get estudio
     *
     * @return string 
     */
    public function getEstudio()
    {
        return $this->estudio;
    }



    /**
     * Set idCiudad
     *
     * @param string $idCiudad
     * @return fotografo
     */
    public function setIdCiudad($idCiudad)
    {
        $this->idCiudad = $idCiudad;
    
        return $this;
    }

    /**
     * Get idCiudad
     *
     * @return string 
     */
    public function getIdCiudad()
    {
        return $this->idCiudad;
    }

    /**
     * Set idPlanFotografo
     *
     * @param string $idPlanFotografo
     * @return fotografo
     */
    public function setIdPlanFotografo($idPlanFotografo)
    {
        $this->idPlanFotografo = $idPlanFotografo;
    
        return $this;
    }

    /**
     * Get idPlanFotografo
     *
     * @return string 
     */
    public function getIdPlanFotografo()
    {
        return $this->idPlanFotografo;
    }

    /**
     * Set idFormaPago
     *
     * @param string $idFormaPago
     * @return fotografo
     */
    public function setIdFormaPago($idFormaPago)
    {
        $this->idFormaPago = $idFormaPago;
    
        return $this;
    }

    /**
     * Get idFormaPago
     *
     * @return string 
     */
    public function getIdFormaPago()
    {
        return $this->idFormaPago;
    }



    /**
     * Set fechaAlta
     *
     * @param string $fechaAlta
     * @return fotografo
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
     * Set fechaInicioPlan
     *
     * @param string $fechaInicioPlan
     * @return fotografo
     */
    public function setFechaInicioPlan($fechaInicioPlan)
    {
        $this->fechaInicioPlan = $fechaInicioPlan;

        return $this;
    }

    /**
     * Get fechaInicioPlan
     *
     * @return string 
     */
    public function getFechaInicioPlan()
    {
        return $this->fechaInicioPlan;
    }
}
