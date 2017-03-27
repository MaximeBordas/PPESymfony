<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 14/03/2017
 * Time: 11:50
 */

namespace FacturationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FacturationBundle\Entity\Facture;


class FacturationController extends Controller
{
    public  function  indexAction()
    {
        return $this->render('FacturationBundle:Facturation:index.html.twig');
    }

    // FONCTION AFFICHER LA LISTE ACTION
    public function afficherListeAction()
    {

        $em = $this->getDoctrine()->getManager();
        $FactureRepository = $em->getRepository('FacturationBundle:Facture');
        $listeFacture = $FactureRepository->findAll();

        return $this->render('FacturationBundle:Facturation:afficherListe.html.twig',array('lalisteFacture'=>$listeFacture));

    }



    // FONCTION GESTION DE REGLEMENT ACTION
    public function gestionReglementAction()
    {
        // récupération de la liste des pharmacies
        // --------------
        $repository = $this->getDoctrine()->getManager()->getRepository('FacturationBundle:Facture');
        $listFactures=$repository->findAll();


        return $this->render('FacturationBundle:Facturation:gestionReglement.html.twig', array('lesFactures'=>$listFactures));
    }



    // FONCTION IMPRIMER UNE FACTURE ACTION
    public function imprimerFactureAction()
    {
        return $this->render('FacturationBundle:Facturation:imprimerFacture.html.twig');
    }


    // FONCTION AJOUTER UNE FACTURE ACTION

    public  function ajouterFacturationAction()
    {
        return $this->render('FacturationBundle:Facturation:ajouterFacture.html.twig');
    }




}