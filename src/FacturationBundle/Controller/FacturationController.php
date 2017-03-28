<?php
/**
 * Created by PhpStorm.
 * User: Maxime
 * Date: 14/03/2017
 * Time: 11:50
 */

namespace FacturationBundle\Controller;


use FacturationBundle\Entity\Facture;
use FacturationBundle\Entity\ModeReglement;
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
    public function gestionDUnReglementAction($id, Request $request)
    {

        if ($request->isMethod('POST'))
        {

            $leModeReglement = $request->get('methode');
            $em=$this->getDoctrine()->getManager();
            $factureRepository = $em->getRepository('FacturationBundle:Facture');
            $modeReglement = $em->getRepository('FacturationBundle:ModeReglement');
            $uneFacture = $factureRepository->find($id);
            $dateReglement = new \DateTime();
            $uneFacture->setDateReglement($dateReglement);
            $unMode = $modeReglement->find($leModeReglement);
            $unMode = $modeReglement->findOneBy(array('libModReglement'=>$leModeReglement));
            $uneFacture->setModeReglement($unMode);

            if (isset($_POST['regler']))
            {
                $uneFacture->setFactureRegler(1);
            }
            else
            {
                $uneFacture->setFactureRegler(0);
            }

            // On pérsiste l'entité
            $em->persist($uneFacture);

            // On flush tout ce qui a été persisté avant
            $em->flush();
            // affichage d'une message flash pour indiquer que la pharmacie à bien était ajoutée
            $this->addFlash('success','l\'article a bien été modifié');

            //Renvois vers la liste des factures
            // récupération de la liste des pharmacies
            // --------------
            $repository = $this->getDoctrine()->getManager()->getRepository('FacturationBundle:Facture');
            $listFactures=$repository->findAll();


            return $this->render('FacturationBundle:Facturation:gestionReglement.html.twig', array('lesFactures'=>$listFactures));


        }
        else
        {
            // récupération de la liste des pharmacies
            // --------------
            $factureRepository = $this->getDoctrine()->getManager()->getRepository('FacturationBundle:Facture');
            $laFacture=$factureRepository->find($id);
            return $this->render('FacturationBundle:Facturation:gestionDUnReglement.html.twig', array('laFacture'=>$laFacture));

        }

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

    public function supprimerFactureAction($id, Request $request)
    {

        //la demande est de type post = (=soumission du formulaire de création d'une pharmacie)?
        //ou de type get = demande d'affichage du formulaire de création d'une pharmacie)???
        //-----------------------------------------------
        if($request->isMethod('POST'))
        {
            //la demande est de type POST
            //Récupération des informations saisies dans le formulaire
            //Et creation de la pharmacie dans la base de données
            //!!! code a venir !!!
            $em = $this->getDoctrine()->getManager();
            $factureRepo = $em->getRepository('FacturationBundle:Facture')->find($id);

            $em->remove($factureRepo);
            $em->flush();

            // affichage d'une message flash pour indiquer que la pharmacie à bien était ajoutée
            $this->addFlash('success','l\'article a bien été supprimé');

            $em = $this->getDoctrine()->getManager();
            $FactureRepository = $em->getRepository('FacturationBundle:Facture');
            $listeFacture = $FactureRepository->findAll();

            return $this->render('FacturationBundle:Facturation:afficherListe.html.twig',array('lalisteFacture'=>$listeFacture));


        }
        else
        {

            $factureRepository = $this->getDoctrine()->getManager()->getRepository('FacturationBundle:Facture');
            $laFacture=$factureRepository->find($id);
            return $this->render('FacturationBundle:Facturation:supprimerFacture.html.twig', array('laFacture'=>$laFacture));
        }
    }




}