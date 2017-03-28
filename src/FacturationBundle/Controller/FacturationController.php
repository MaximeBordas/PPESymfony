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

    // FONCTION POUR AFFICHER UNE FACTURE ACTION
    public function afficherFactureAction($id)
    {

        //recupération des caractéristiques d'une facture dont le numéro est contenu dans $id
        $em=$this->getDoctrine()->getManager();
        $factureRepository = $em->getRepository('FacturationBundle:Facture');
        $uneFacture = $factureRepository->find($id);

        // on demande à la vue d'afficher la pharm
        return $this->render('FacturationBundle:Facturation:afficherFacture.html.twig', array('laFacture'=>$uneFacture));
    }

    // FONCTION AFFICHER LA LISTE DE FACTURE ACTION

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

    public function afficherFacturePDFAction($id)
    {
        $em=$this->getDoctrine()->getManager();
        $factureRepository = $em->getRepository('FacturationBundle:Facture');
        $uneFacture = $factureRepository->find($id);
        //on stocke la vue à convertir en PDF, en n'oubliant pas les paramètres twig si la vue comporte des données dynamiques
        $html = $this->renderView('FacturationBundle:Facturation:afficherFacturePDF.html.twig', array('laFacture' => $uneFacture));

        //on instancie la classe Html2Pdf_Html2Pdf en lui passant en paramètre
        //le sens de la page "portrait" => p ou "paysage" => l
        //le format A4,A5...
        //la langue du document fr,en,it...
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');

        //SetDisplayMode définit la manière dont le document PDF va être affiché par l’utilisateur
        //fullpage : affiche la page entière sur l'écran
        //fullwidth : utilise la largeur maximum de la fenêtre
        //real : utilise la taille réelle
        $html2pdf->pdf->SetDisplayMode('real');

        //writeHTML va tout simplement prendre la vue stocker dans la variable $html pour la convertir en format PDF
        $html2pdf->writeHTML($html);

        //Output envoit le document PDF au navigateur internet avec un nom spécifique qui aura un rapport avec le contenu à convertir (exemple : Facture, Règlement…)
        $html2pdf->Output('Facture.pdf');

        var_dump($html);
        die();


//        return new Response();
        return $this->render('FacturationBundle:Facturation:afficherFacture.html.twig', array('laFacture'=>$uneFacture));
    }




}