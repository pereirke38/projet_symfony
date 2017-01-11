<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace sil18\VitrineBundle\Entity;

/**
 * Description of Panier
 *
 * @author pereirke
 */
class Panier {
    private $contenu;
    // Tableau - contenu[i] = quantité d'article d'id = i dans le panier)
    
    public function __construct() {
        $this->contenu = array();
    }
    
    public function getContenu() {
        return $this->contenu;
    }
    
    public function ajoutArticle($articleId, $qte = 1) {
    // Ajout de l'article d'id $articleId au contenu, en quantitée qte
    // (vérifier si l'article n'existe pas déja)
        if(array_key_exists($articleId,$this->contenu)) {
            $this->contenu[$articleId]++;
        }
        else {
            $this->contenu[$articleId] = $qte;
        }
       
    }
    
    public function supprimerArticle($articleId) {
    // Supprimer l'article d'id $articleId du contenu
        if(in_array($article,$contenu) && $contenu[$articleId] != 0) {
            unset($contenu[$articleId]);
        }
    }
    
    public function viderPanier() {
    // Vide le contenu
       if(count($this->getContenu())!=0) {
           $this->contenu = array();
       }
    }
}
