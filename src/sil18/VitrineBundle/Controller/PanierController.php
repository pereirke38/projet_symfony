<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace sil18\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use sil18\VitrineBundle\Entity\Panier;
use DateTime;

/**
 * Description of PanierController
 *
 * @author pereirke
 */
class PanierController extends Controller {
    public function contenuPanierAction(){
        $session = $this->getRequest()->getSession();
        if($session->has("panier")) {
            $panier = $session->get("panier");
        }
        else {
            $panier = new Panier();
            $session->set("panier",$panier);
        }
        $articles = array();
        foreach($panier->getContenu() as $id=>$qte) {
            $article = $this->getDoctrine()->getManager()
                     ->getRepository('sil18VitrineBundle:Article')
                     ->findOneById($id);
             array_push($articles, $article);
        }
        $total = 0;
        foreach($articles as $article) {
            $total += $article->getPrice() * $panier->getContenu()[$article->getId()];
        }
        return $this->render('sil18VitrineBundle:Default:contenuPanier.html.twig',
                array(
                    'articles' => $articles,
                    'panier' => $panier,
                    'total' => $total
                ));
    }
    
    public function ajoutArticleAction($id, $qte = 1) {
        $session = $this->getRequest()->getSession();
        if($session->has("panier")) {
            $panier = $session->get("panier");
        }
        else {
            $panier = new Panier();
        }
        $panier->ajoutArticle($id, $qte);
        $session->set("panier",$panier);
        return $this->redirect($this->generateUrl("accueil"));
    }
    
    public function viderPanierAction() {
        $session = $this->getRequest()->getSession();
        if($session->has("panier")) {
            $panier = $session->get("panier");
        }
        else {
            $panier = new Panier();
        }
        $panier->viderPanier();
        $session->set("panier", $panier);
        return $this->redirect($this->generateUrl("contenuPanier"));
    }
    
    public function validationPanierAction() {
        
        $session = $this->getRequest()->getSession();
        if($session->has("panier")) {
            $panier = $session->get("panier");
        }
        else {
            $panier = new Panier();
        }
        if($session->has('client_id')) {
            $clientId = $session->get('client_id');
        }
        $em = $this->getDoctrine()->getManager();
        $client = $em->getRepository('sil18VitrineBundle:Client')->find($clientId);
        $commande = new \sil18\VitrineBundle\Entity\Commande();
        $commande->setClient($client);
        $commande->setDateCommande(new DateTime());
        $commande->setValilde(1);
        $em->persist($commande);
        $em->flush($commande);
        foreach($panier->getContenu() as $id=>$qte) {
            $article = $em->getRepository('sil18VitrineBundle:Article')->find($id);
            $prixArticle = $article->getPrice();
            $ligneCommande = new \sil18\VitrineBundle\Entity\LigneCommande();
            $ligneCommande->setCommande($commande);
            $ligneCommande->setArticle($article);
            $ligneCommande->setQuantite($qte);
            $ligneCommande->setPrixArticle($prixArticle);
            $em->persist($ligneCommande);
            $em->flush($ligneCommande);
        }
        $this->viderPanierAction();
        return $this->render('sil18VitrineBundle:Default:validationPanier.html.twig',
            array(
                'commande_id' => $commande->getId()
            )
        );
        
    }
    public function contenuPanierLayoutAction(){
        $session = $this->getRequest()->getSession();
        if($session->has("panier")) {
            $panier = $session->get("panier");
        }
        else {
            $panier = new Panier();
            $session->set("panier",$panier);
        }
        $articles = array();
        foreach($panier->getContenu() as $id=>$qte) {
            $article = $this->getDoctrine()->getManager()
                     ->getRepository('sil18VitrineBundle:Article')
                     ->findOneById($id);
             array_push($articles, $article);
        }
        $total = 0;
        foreach($articles as $article) {
            $total += $article->getPrice() * $panier->getContenu()[$article->getId()];
        }
        return $this->render('sil18VitrineBundle:Default:contenuPanier.html.twig',
                array(
                    'articles' => $articles,
                    'panier' => $panier,
                    'total' => $total
                ));
    }
}
