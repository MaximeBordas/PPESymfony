<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 14/03/2017
 * Time: 11:50
 */

namespace FacturationBundle\Controller;

<<<<<<< Updated upstream
use FacturationBundle\Entity\Facture;
use FacturationBundle\Form\FactureType;
=======
use FacturationBundle\FacturationBundle;
>>>>>>> Stashed changes
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


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
    public function listeFactures()
    {
        $lalisteFacture = array(
            array('id'=>1, 'nom_F'=>'Agena3000','client'=>'Nodevo', 'Date'=>'01/03/2017', 'annee Facture'=> 2017, 'montantHT'=>330.52, 'montantTVA'=>66.10, 'montantTTC'=>396.64,'txremise'=>5,'montantTotal'=>376.80 ,'reglement'=>'checbox','Date reglement'=>'20/03/2017','commentaire'=> 'aucun commentaire'),

            array('id'=>2, 'nom_F'=>'Services informatique','client'=>'Mme. KINTZLER', 'Date'=>'02/06/2016', 'annee Facture'=> 2016, 'montantHT'=>150, 'montantTVA'=>30, 'montantTTC'=>180,'txremise'=>0,'montantTotal'=>180 ,'reglement'=>'checbox','Date reglement'=>'03/06/2016','commentaire'=> 'aucun commentaire'),

            array('id'=>3, 'nom de la facture'=>'matériels informatique','client'=>'Etablissment St vincent', 'Date'=>'20/03/2017', 'annee Facture'=> 2017, 'montantHT'=>580.52, 'montantTVA'=>116.10, 'montantTTC'=>696.62,'txremise'=>0,'montantTotal'=>696.62 ,'reglement'=>'checbox','Date reglement'=>'','commentaire'=> 'paiement en attente'),
        );
        return $lalisteFacture;
    }

}