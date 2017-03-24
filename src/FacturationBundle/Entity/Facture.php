<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table(name="facture")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\FactureRepository")
 */
class Facture
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateFacture", type="datetime")
     */
    private $dateFacture;

    /**
     * @var int
     *
     * @ORM\Column(name="numTauxTva", type="integer")
     */
    private $numTauxTva;

    /**
     * @var float
     *
     * @ORM\Column(name="montantHT", type="float")
     */
    private $montantHT;


    /**
     * @var float
     *
     * @ORM\Column(name="montantTTC", type="float")
     */
    private $montantTTC;

    /**
     * @var float
     *
     * @ORM\Column(name="montantAccompteTTC", type="float")
     */
    private $montantAccompteTTC;

    /**
     * @var string
     *
     * @ORM\Column(name="codeModeReglement", type="string", length=255)
     */
    private $codeModeReglement;

    /**
     * @var int
     *
     * @ORM\Column(name="numCheque", type="integer")
     */
    private $numCheque;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateReglement", type="datetime")
     */
    private $dateReglement;

    /**
     * @var string
     *
     * @ORM\Column(name="typeFacture", type="string", length=255)
     */
    private $typeFacture;

    /**
     * @var float
     *
     * @ORM\Column(name="montantRegle", type="float")
     */
    private $montantRegle;

    /**
     * @var string
     *
     * @ORM\Column(name="libFacture", type="string", length=255)
     */
    private $libFacture;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=5000)
     */
    private $commentaire;

    /**
     * @var float
     *
     * @ORM\Column(name="montantRemise", type="float")
     */
    private $montantRemise;

    /**
     * @var float
     *
     * @ORM\Column(name="txRemise", type="float")
     */
    private $txRemise;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DateDevis", type="datetime")
     */
    private $dateDevis;



    /**
     * @ORM\ManyToOne(targetEntity="FacturationBundle\Entity\Banque", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $banque;

    /**
     * @ORM\ManyToOne(targetEntity="FacturationBundle\Entity\ModeReglement", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $modeReglement;

    /**
     * @ORM\ManyToOne(targetEntity="FacturationBundle\Entity\TVA", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $Tva;

    /**
     * @ORM\ManyToOne(targetEntity="FacturationBundle\Entity\FacturePrestation", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $facturePrestation;

    /**
     * @ORM\ManyToOne(targetEntity="FacturationBundle\Entity\Client", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $client;

    /**
     * @ORM\OneToOne(targetEntity="FacturationBundle\Entity\Devis", cascade={"persist"})
     */
    private $unDevis;



    public function __construct()
    {
        $this->dateFacture = new \DateTime();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateFacture
     *
     * @param \DateTime $dateFacture
     *
     * @return Facture
     */
    public function setDateFacture($dateFacture)
    {
        $this->dateFacture = $dateFacture;

        return $this;
    }

    /**
     * Get dateFacture
     *
     * @return \DateTime
     */
    public function getDateFacture()
    {
        return $this->dateFacture;
    }


    /**
     * Set montantHT
     *
     * @param float $montantHT
     *
     * @return Facture
     */
    public function setMontantHT($montantHT)
    {
        $this->montantHT = $montantHT;

        return $this;
    }

    /**
     * Get montantHT
     *
     * @return float
     */
    public function getMontantHT()
    {
        return $this->montantHT;
    }

    /**
     * Set montantTVA
     *
     * @param float $montantTVA
     *
     * @return Facture
     */
    public function setMontantTVA($montantTVA)
    {
        $this->montantTVA = $montantTVA;

        return $this;
    }

    /**
     * Get montantTVA
     *
     * @return float
     */
    public function getMontantTVA()
    {
        return $this->montantTVA;
    }

    /**
     * Set montantTTC
     *
     * @param float $montantTTC
     *
     * @return Facture
     */
    public function setMontantTTC($montantTTC)
    {
        $this->montantTTC = $montantTTC;

        return $this;
    }

    /**
     * Get montantTTC
     *
     * @return float
     */
    public function getMontantTTC()
    {
        return $this->montantTTC;
    }

    /**
     * Set montantAccompteTTC
     *
     * @param float $montantAccompteTTC
     *
     * @return Facture
     */
    public function setMontantAccompteTTC($montantAccompteTTC)
    {
        $this->montantAccompteTTC = $montantAccompteTTC;

        return $this;
    }

    /**
     * Get montantAccompteTTC
     *
     * @return float
     */
    public function getMontantAccompteTTC()
    {
        return $this->montantAccompteTTC;
    }

    /**
     * Set codeModeReglement
     *
     * @param string $codeModeReglement
     *
     * @return Facture
     */
    public function setCodeModeReglement($codeModeReglement)
    {
        $this->codeModeReglement = $codeModeReglement;

        return $this;
    }

    /**
     * Get codeModeReglement
     *
     * @return string
     */
    public function getCodeModeReglement()
    {
        return $this->codeModeReglement;
    }

    /**
     * Set numCheque
     *
     * @param integer $numCheque
     *
     * @return Facture
     */
    public function setNumCheque($numCheque)
    {
        $this->numCheque = $numCheque;

        return $this;
    }

    /**
     * Get numCheque
     *
     * @return int
     */
    public function getNumCheque()
    {
        return $this->numCheque;
    }

    /**
     * Set dateReglement
     *
     * @param \DateTime $dateReglement
     *
     * @return Facture
     */
    public function setDateReglement($dateReglement)
    {
        $this->dateReglement = $dateReglement;

        return $this;
    }

    /**
     * Get dateReglement
     *
     * @return \DateTime
     */
    public function getDateReglement()
    {
        return $this->dateReglement;
    }

    /**
     * Set typeFacture
     *
     * @param string $typeFacture
     *
     * @return Facture
     */
    public function setTypeFacture($typeFacture)
    {
        $this->typeFacture = $typeFacture;

        return $this;
    }

    /**
     * Get typeFacture
     *
     * @return string
     */
    public function getTypeFacture()
    {
        return $this->typeFacture;
    }

    /**
     * Set montantRegle
     *
     * @param float $montantRegle
     *
     * @return Facture
     */
    public function setMontantRegle($montantRegle)
    {
        $this->montantRegle = $montantRegle;

        return $this;
    }

    /**
     * Get montantRegle
     *
     * @return float
     */
    public function getMontantRegle()
    {
        return $this->montantRegle;
    }

    /**
     * Set libFacture
     *
     * @param string $libFacture
     *
     * @return Facture
     */
    public function setLibFacture($libFacture)
    {
        $this->libFacture = $libFacture;

        return $this;
    }

    /**
     * Get libFacture
     *
     * @return string
     */
    public function getLibFacture()
    {
        return $this->libFacture;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Facture
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set montantRemise
     *
     * @param float $montantRemise
     *
     * @return Facture
     */
    public function setMontantRemise($montantRemise)
    {
        $this->montantRemise = $montantRemise;

        return $this;
    }

    /**
     * Get montantRemise
     *
     * @return float
     */
    public function getMontantRemise()
    {
        return $this->montantRemise;
    }

    /**
     * Set txRemise
     *
     * @param float $txRemise
     *
     * @return Facture
     */
    public function setTxRemise($txRemise)
    {
        $this->txRemise = $txRemise;

        return $this;
    }

    /**
     * Get txRemise
     *
     * @return float
     */
    public function getTxRemise()
    {
        return $this->txRemise;
    }

    /**
     * Set dateDevis
     *
     * @param \DateTime $dateDevis
     *
     * @return Facture
     */
    public function setDateDevis($dateDevis)
    {
        $this->dateDevis = $dateDevis;

        return $this;
    }

    /**
     * Get dateDevis
     *
     * @return \DateTime
     */
    public function getDateDevis()
    {
        return $this->dateDevis;
    }

    /**
     * Set banque
     *
     * @param \FacturationBundle\Entity\Banque $banque
     *
     * @return Facture
     */
    public function setBanque(\FacturationBundle\Entity\Banque $banque)
    {
        $this->banque = $banque;

        return $this;
    }

    /**
     * Get banque
     *
     * @return \FacturationBundle\Entity\Banque
     */
    public function getBanque()
    {
        return $this->banque;
    }

    /**
     * Set modeReglement
     *
     * @param \FacturationBundle\Entity\ModeReglement $modeReglement
     *
     * @return Facture
     */
    public function setModeReglement(\FacturationBundle\Entity\ModeReglement $modeReglement)
    {
        $this->modeReglement = $modeReglement;

        return $this;
    }

    /**
     * Get modeReglement
     *
     * @return \FacturationBundle\Entity\ModeReglement
     */
    public function getModeReglement()
    {
        return $this->modeReglement;
    }

    /**
     * Set tva
     *
     * @param \FacturationBundle\Entity\TVA $tva
     *
     * @return Facture
     */
    public function setTva(\FacturationBundle\Entity\TVA $tva)
    {
        $this->Tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return \FacturationBundle\Entity\TVA
     */
    public function getTva()
    {
        return $this->Tva;
    }

    /**
     * Set numTauxTva
     *
     * @param integer $numTauxTva
     *
     * @return Facture
     */
    public function setNumTauxTva($numTauxTva)
    {
        $this->numTauxTva = $numTauxTva;

        return $this;
    }

    /**
     * Get numTauxTva
     *
     * @return integer
     */
    public function getNumTauxTva()
    {
        return $this->numTauxTva;
    }

    /**
     * Set facturePrestation
     *
     * @param \FacturationBundle\Entity\FacturePrestation $facturePrestation
     *
     * @return Facture
     */
    public function setFacturePrestation(\FacturationBundle\Entity\FacturePrestation $facturePrestation)
    {
        $this->facturePrestation = $facturePrestation;

        return $this;
    }

    /**
     * Get facturePrestation
     *
     * @return \FacturationBundle\Entity\FacturePrestation
     */
    public function getFacturePrestation()
    {
        return $this->facturePrestation;
    }

    /**
     * Set client
     *
     * @param \FacturationBundle\Entity\Client $client
     *
     * @return Facture
     */
    public function setClient(\FacturationBundle\Entity\Client $client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \FacturationBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set unDevis
     *
     * @param \FacturationBundle\Entity\Devis $unDevis
     *
     * @return Facture
     */
    public function setUnDevis(\FacturationBundle\Entity\Devis $unDevis)
    {
        $this->unDevis = $unDevis;

        return $this;
    }

    /**
     * Get unDevis
     *
     * @return \FacturationBundle\Entity\Devis
     */
    public function getUnDevis()
    {
        return $this->unDevis;
    }
}
