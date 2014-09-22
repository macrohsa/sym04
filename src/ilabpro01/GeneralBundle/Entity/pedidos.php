<?php

namespace ilabpro01\GeneralBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


/**
 * @ORM\Entity
 * @ORM\Table(name="pedidos")
 * 
 */
class pedidos {
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
    protected $fotografo;
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $usuario;
    
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $fechaAlta;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $importe;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $estado;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $evento;
    
    
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
     * Set sitio
     *
     * @param string $sitio
     * @return pedidos
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
     * Set fotografo
     *
     * @param string $fotografo
     * @return pedidos
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
     * Set usuario
     *
     * @param string $usuario
     * @return pedidos
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
     * Set fechaAlta
     *
     * @param string $fechaAlta
     * @return pedidos
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
     * Set importe
     *
     * @param string $importe
     * @return pedidos
     */
    public function setImporte($importe)
    {
        $this->importe = $importe;

        return $this;
    }

    /**
     * Get importe
     *
     * @return string 
     */
    public function getImporte()
    {
        return $this->importe;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return pedidos
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set evento
     *
     * @param string $evento
     * @return pedidos
     */
    public function setEvento($evento)
    {
        $this->evento = $evento;

        return $this;
    }

    /**
     * Get evento
     *
     * @return string 
     */
    public function getEvento()
    {
        return $this->evento;
    }
}
