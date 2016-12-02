<?php

namespace sil18\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 */
class Article
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $price;

    /**
     * @var integer
     */
    private $stock;

    /**
     * @var string
     */
    private $manyToOne;


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
     * Set name
     *
     * @param string $name
     * @return Article
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set price
     *
     * @param string $price
     * @return Article
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set stock
     *
     * @param integer $stock
     * @return Article
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }

    /**
     * Get stock
     *
     * @return integer 
     */
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set manyToOne
     *
     * @param string $manyToOne
     * @return Article
     */
    public function setManyToOne($manyToOne)
    {
        $this->manyToOne = $manyToOne;

        return $this;
    }

    /**
     * Get manyToOne
     *
     * @return string 
     */
    public function getManyToOne()
    {
        return $this->manyToOne;
    }
    /**
     * @var \sil18\VitrineBundle\Entity\CategorieArticle
     */
    private $categorieArticle;


    /**
     * Set categorieArticle
     *
     * @param \sil18\VitrineBundle\Entity\CategorieArticle $categorieArticle
     * @return Article
     */
    public function setCategorieArticle(\sil18\VitrineBundle\Entity\CategorieArticle $categorieArticle = null)
    {
        $this->categorieArticle = $categorieArticle;

        return $this;
    }

    /**
     * Get categorieArticle
     *
     * @return \sil18\VitrineBundle\Entity\CategorieArticle 
     */
    public function getCategorieArticle()
    {
        return $this->categorieArticle;
    }
}
