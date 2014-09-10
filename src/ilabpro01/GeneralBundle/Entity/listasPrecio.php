<?php

namespace ilabpro01\GeneralBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


/**
 * @ORM\Entity
 * @ORM\Table(name="listasPrecio")
 * 
 */
class listasPrecio {
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
    protected $listaPrecio;
    
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $descuento;
    
    
    
    public function __toString() {
        return $nom = $this->getNombre();
    }
    

    /**
     * Set sitio
     *
     * @param string $sitio
     * @return listasPrecio
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
     * @return listasPrecio
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
     * Set listaPrecio
     *
     * @param string $listaPrecio
     * @return listasPrecio
     */
    public function setListaPrecio($listaPrecio)
    {
        $this->listaPrecio = $listaPrecio;

        return $this;
    }

    /**
     * Get listaPrecio
     *
     * @return string 
     */
    public function getListaPrecio()
    {
        return $this->listaPrecio;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return listasPrecio
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;

        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
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
