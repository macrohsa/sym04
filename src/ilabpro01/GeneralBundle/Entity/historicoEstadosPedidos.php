<?php

namespace ilabpro01\GeneralBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


/**
 * @ORM\Entity
 * @ORM\Table(name="historicoEstadosPedidos")
 * 
 */
class historicoEstadosPedidos {
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
    protected $estado;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $pedido;
    
    
    public function __toString() {
        return $nom = $this->getNombre();
    }
    

    /**
     * Set sitio
     *
     * @param string $sitio
     * @return historicoEstadosPedidos
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
     * @return historicoEstadosPedidos
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
     * Set estado
     *
     * @param string $estado
     * @return historicoEstadosPedidos
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
     * Set pedido
     *
     * @param string $pedido
     * @return historicoEstadosPedidos
     */
    public function setPedido($pedido)
    {
        $this->pedido = $pedido;

        return $this;
    }

    /**
     * Get pedido
     *
     * @return string 
     */
    public function getPedido()
    {
        return $this->pedido;
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
