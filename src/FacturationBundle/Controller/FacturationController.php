<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 14/03/2017
 * Time: 11:50
 */

namespace FacturationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class FacturationController extends Controller
{
    public  function  indexAction()
    {
        return $this->render('FacturationBundle:Facturation:index.html.twig');
    }
    public function afficherListeAction()
    {
        return $this->render('FacturationBundle:Facturation:afficherListe.html.twig');
    }
    public function gestionReglementAction()
    {
        return $this->render('FacturationBundle:Facturation:gestionReglement.html.twig');
    }
    public function imprimerFactureAction()
    {
        return $this->render('FacturationBundle:Facturation:imprimerFacture.html.twig');
    }
    public  function ajouterFacturationAction()
    {
        return $this->render('FacturationBundle:Facturation:ajouterFacture.html.twig');
    }

}