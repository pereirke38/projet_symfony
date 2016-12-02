<?php

namespace sil18\VitrineBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('sil18VitrineBundle:Default:index.html.twig',
                array('name' => $name));
    }
    
    public function mentionsAction() {
        return $this->render('sil18VitrineBundle:Default:mentions.html.twig');
    }
    
    public function catalogueAction() {
        $catalogue = $this->getDoctrine()->getManager()
                          ->getRepository('sil18VitrineBundle:CategorieArticle')
                          ->findAll();
        if(!$catalogue) {
            throw $this->createNotFoundException('Catalogue non trouvé !');
        }
        
        return $this->render('sil18VitrineBundle:Default:catalogue.html.twig',
                array('catalogue' => $catalogue));
    }
    
    public function articlesParCategorieAction($categorie_id) {
        $categorie = $this->getDoctrine()->getManager()
                         ->getRepository('sil18VitrineBundle:CategorieArticle')
                         ->find($categorie_id);
        
        if(!$categorie) {
            throw $this->createNotFoundException('Catégorie d\'id: '.$id.' non trouvée!');
        }
        else {
            $articles = $categorie->getArticles();
        }
        return $this->render('sil18VitrineBundle:Default:articlesParCategorie.html.twig',
                array(
                   'articles' => $articles 
                ));
    }
}
