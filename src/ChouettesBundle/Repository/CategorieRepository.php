<?php

namespace ChouettesBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * CategorieRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CategorieRepository extends EntityRepository
{
    public function getDoudouByCateg($categ){
// Permet de faire une requête sur lES TABLES CATEGORIE, MODELE et IMAGES.
// On récupère TOUS les MODELES avec leurs IMAGES par CARTEGORIE
// La fonction prend en paramètre la catégorie (bijoux, doudous et accessoires)
// Permet de gérer l'affichage des images en aléatoire (fait le rangement avant le lancement du random)
        $sql = 'SELECT * FROM categorie JOIN modele ON categorie.id = modele.categorie_id JOIN image ON image.id = modele.image_id WHERE nom = :categ';
        $params = array(
            'categ' => $categ,
        );

        return $this->getEntityManager()->getConnection()->executeQuery($sql, $params)->fetchAll();

    }
}

