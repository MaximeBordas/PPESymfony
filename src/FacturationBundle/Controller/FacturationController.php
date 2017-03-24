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
    public function afficherListeAction()
    {
        $listeFacture = $this->listeFactures();
        return $this->render('FacturationBundle:Facturation:afficherListe.html.twig',array('lalisteFacture' =>$listeFacture));
    }
    public function gestionReglementAction()
    {
        // récupération de la liste des pharmacies
        // --------------
        $repository = $this->getDoctrine()->getManager()->getRepository('FacturationBundle:Facture');
        $listFactures=$repository->findAll();


        return $this->render('FacturationBundle:Facturation:gestionReglement.html.twig', array('lesFactures'=>$listFactures));
    }
    public function imprimerFactureAction()
    {
        return $this->render('FacturationBundle:Facturation:imprimerFacture.html.twig');
    }
    public  function ajouterFacturationAction()
    {
        return $this->render('FacturationBundle:Facturation:ajouterFacture.html.twig');
    }
    public function listeFactures()
    {

        $lalisteFacture = array(
            array('id'=>1, 'nom_F'=>'Agena3000','client'=>'Nodevo', 'Date'=>'01/03/2017', 'annee_F'=> 2017, 'montantHT'=>330.52, 'montantTVA'=>66.10, 'montantTTC'=>396.64,'txremise'=>5,'montantTotal'=>376.80 ,'reglement'=>'','date_reglement'=>'20/03/2017','commentaire'=> 'aucun commentaire'),

            array('id'=>2, 'nom_F'=>'Services informatique','client'=>'Mme. KINTZLER', 'Date'=>'02/06/2016', 'annee_F'=> 2016, 'montantHT'=>150, 'montantTVA'=>30, 'montantTTC'=>180,'txremise'=>0,'montantTotal'=>180 ,'reglement'=>'','date_reglement'=>'03/06/2016','commentaire'=> 'aucun commentaire'),

            array('id'=>3, 'nom_F'=>'matériels informatique','client'=>'Etablissement St vincent', 'Date'=>'20/03/2017', 'annee_F'=> 2017, 'montantHT'=>580.52, 'montantTVA'=>116.10, 'montantTTC'=>696.62,'txremise'=>0,'montantTotal'=>696.62 ,'reglement'=>'','date_reglement'=>'','commentaire'=> 'paiement en attente'),
        );
        return $lalisteFacture;
    }

}