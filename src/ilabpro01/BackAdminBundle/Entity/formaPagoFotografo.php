<?php

namespace ilabpro01\BackAdminBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


/**
 * @ORM\Entity
 * @ORM\Table(name="FormaPagoFotografo")
 * 
 * @DoctrineAssert\UniqueEntity(fields = "codigoFormaPago", message="El código ingresado ya existe para otra Forma de Pago.")
 * 
 */
class formaPagoFotografo {
   
    
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * 
     */
    protected $id;
    
    
    /**
     * @ORM\Column(type="string", length=10)
     * @Assert\NotBlank()
     * @Assert\MaxLength(limit = 10, message = "El máximo número de caracteres es 10.")
     * 
     */
    protected $codigoFormaPago;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\MaxLength(limit = 50, message = "El máximo número de caracteres es 50.")
     * 
     */
    protected $nombre;
    
    
    /**
     * @ORM\Column(type="boolean", length=1, nullable=true)
     * 
     */
    protected $disponible;
    
    

    
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
     * Set codigoFormaPago
     *
     * @param string $codigoFormaPago
     * @return formaPagoFotografo
     */
    public function setCodigoFormaPago($codigoFormaPago)
    {
        $this->codigoFormaPago = $codigoFormaPago;
    
        return $this;
    }

    /**
     * Get codigoFormaPago
     *
     * @return string 
     */
    public function getCodigoFormaPago()
    {
        return $this->codigoFormaPago;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return formaPagoFotografo
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
     * Set disponible
     *
     * @param boolean $disponible
     * @return formaPagoFotografo
     */
    public function setDisponible($disponible)
    {
        $this->disponible = $disponible;
    
        return $this;
    }

    /**
     * Get disponible
     *
     * @return boolean 
     */
    public function getDisponible()
    {
        return $this->disponible;
    }
}
