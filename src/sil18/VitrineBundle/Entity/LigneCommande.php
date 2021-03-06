<?php

namespace sil18\VitrineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * LigneCommande
 */
class LigneCommande
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $quantite;

    /**
     * @var string
     */
    private $prixArticle;

    /**
     * @var \sil18\VitrineBundle\Entity\Commande
     */
    private $commande;

    /**
     * @var \sil18\VitrineBundle\Entity\Article
     */
    private $article;


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
     * Set quantite
     *
     * @param integer $quantite
     * @return LigneCommande
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set prixArticle
     *
     * @param string prixArticle
     * @return LigneCommande
     */
    public function setPrixArticle($prixArticle = null)
    {
        $this->prixArticle = $prixArticle;

        return $this;
    }

    /**
     * Get prixArticle
     *
     * @return string
     */
    public function getPrixArticle()
    {
        return $this->prixArticle;
    }

    /**
     * Set commande
     *
     * @param \sil18\VitrineBundle\Entity\Commande $commande
     * @return LigneCommande
     */
    public function setCommande(\sil18\VitrineBundle\Entity\Commande $commande = null)
    {
        $this->commande = $commande;

        return $this;
    }

    /**
     * Get commande
     *
     * @return \sil18\VitrineBundle\Entity\Commande 
     */
    public function getCommande()
    {
        return $this->commande;
    }

    /**
     * Set article
     *
     * @param \sil18\VitrineBundle\Entity\Article $article
     * @return LigneCommande
     */
    public function setArticle(\sil18\VitrineBundle\Entity\Article $article = null)
    {
        $this->article = $article;

        return $this;
    }

    /**
     * Get article
     *
     * @return \sil18\VitrineBundle\Entity\Article 
     */
    public function getArticle()
    {
        return $this->article;
    }

}
