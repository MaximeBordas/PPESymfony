<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 14/03/2017
 * Time: 11:50
 */

namespace FacturationBundle\Controller;


use FacturationBundle\Entity\Facture;
use FacturationBundle\Form\FactureType;
use FacturationBundle\FacturationBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;



class FacturationController extends Controller
{
    public  function  indexAction()
    {
        return $this->render('FacturationBundle:Facturation:index.html.twig');
    }
    public function afficherFactureAction($id)
    {

        //recupération des caractéristiques d'une facture dont le numéro est contenu dans $id
        $em=$this->getDoctrine()->getManager();
        $factureRepository = $em->getRepository('FacturationBundle:Facture');

        // on demande à la vue d'afficher la pharm
        return $this->render('FacturationBundle:Facturation:afficherFacture.html.twig', array('laFacture'=>$uneFacture));
    }
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
        $lesFactures = $this->getDoctrine()->getManager()->getRepository('FacturationBundle:Facture')->findAll();

        return $this->render('FacturationBundle:Facturation:imprimerFacture.html.twig',array('lesFactures' => $lesFactures));
    }
    public  function ajouterFactureAction(Request $request)
    {
        //on crée une facture
        $facture = new Facture();

        //On récupére le formulaire
        $form = $this->createForm(FactureType::class,$facture);

        $form->handleRequest($request);

        //on vérifie si le form est soumis
        if($form->isSubmitted() && $form->isValid())
        {
            //on enregistre la facture en bdd
            $em = $this->getDoctrine()->getManager();
            //on persist l'objet Facture
            $em->persist($facture);
            //on envois en bdd
            $em->flush();

            return $this->render("FacturationBundle:Facturation:afficherListe.html.twig");

        }



        //on Crée le html de la vue
        $formView  = $form->createView();

        //on rend la vue
        return $this->render('FacturationBundle:Facturation:ajouterFacture.html.twig',array('form'=>$formView));
    }




}