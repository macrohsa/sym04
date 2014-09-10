<?php

namespace ilabpro01\GeneralBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Validator\Constraints as Assert;
//use Symfony\Bridge\Doctrine\Validator\Constraints as DoctrineAssert;


/**
 * @ORM\Entity
 * @ORM\Table(name="precioXproducto")
 * 
 */
class precioXproducto {
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
    protected $precio;
    
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $producto;
    
    
    /**
     * @ORM\Column(type="string", length=50)
     * 
     */
    protected $lista;
    
    
    
    public function __toString() {
        return $nom = $this->getNombre();
    }
    
    

    /**
     * Set sitio
     *
     * @param string $sitio
     * @return precioXproducto
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
     * @return precioXproducto
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
     * Set precio
     *
     * @param string $precio
     * @return precioXproducto
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return string 
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set producto
     *
     * @param string $producto
     * @return precioXproducto
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return string 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set lista
     *
     * @param string $lista
     * @return precioXproducto
     */
    public function setLista($lista)
    {
        $this->lista = $lista;

        return $this;
    }

    /**
     * Get lista
     *
     * @return string 
     */
    public function getLista()
    {
        return $this->lista;
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
