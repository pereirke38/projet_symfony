<?php

namespace sil18\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commande
 */
class Commande
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateCommande;

    /**
     * @var boolean
     */
    private $valilde;

    /**
     * @var \sil18\VitrineBundle\Entity\Client
     */
    private $client;


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
     * Set dateCommande
     *
     * @param \DateTime $dateCommande
     * @return Commande
     */
    public function setDateCommande($dateCommande)
    {
        $this->dateCommande = $dateCommande;

        return $this;
    }

    /**
     * Get dateCommande
     *
     * @return \DateTime 
     */
    public function getDateCommande()
    {
        return $this->dateCommande;
    }

    /**
     * Set valilde
     *
     * @param boolean $valilde
     * @return Commande
     */
    public function setValilde($valilde)
    {
        $this->valilde = $valilde;

        return $this;
    }

    /**
     * Get valilde
     *
     * @return boolean 
     */
    public function getValilde()
    {
        return $this->valilde;
    }

    /**
     * Set client
     *
     * @param \sil18\VitrineBundle\Entity\Client $client
     * @return Commande
     */
    public function setClient(\sil18\VitrineBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \sil18\VitrineBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ligneCommandes;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ligneCommandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add ligneCommandes
     *
     * @param \sil18\VitrineBundle\Entity\LigneCommande $ligneCommandes
     * @return Commande
     */
    public function addLigneCommande(\sil18\VitrineBundle\Entity\LigneCommande $ligneCommandes)
    {
        $this->ligneCommandes[] = $ligneCommandes;

        return $this;
    }

    /**
     * Remove ligneCommandes
     *
     * @param \sil18\VitrineBundle\Entity\LigneCommande $ligneCommandes
     */
    public function removeLigneCommande(\sil18\VitrineBundle\Entity\LigneCommande $ligneCommandes)
    {
        $this->ligneCommandes->removeElement($ligneCommandes);
    }

    /**
     * Get ligneCommandes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLigneCommandes()
    {
        return $this->ligneCommandes;
    }
    
    public function __toString() {
        return $this->getId();
    }
}
