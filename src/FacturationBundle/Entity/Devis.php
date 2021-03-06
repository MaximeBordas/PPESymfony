<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Devis
 *
 * @ORM\Table(name="devis")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\DevisRepository")
 */
class Devis
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
     * @var int
     *
     * @ORM\Column(name="numVersionDevis", type="integer")
     */
    private $numVersionDevis;

    /**
     * @var int
     *
     * @ORM\Column(name="anneeDevis", type="integer")
     */
    private $anneeDevis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDevis", type="datetimetz")
     */
    private $dateDevis;


    /**
     * @var int
     *
     * @ORM\Column(name="numTempsValidite", type="integer")
     */
    private $numTempsValidite;

    /**
     * @var string
     *
     * @ORM\Column(name="codeEtatDevis", type="string", length=255)
     */
    private $codeEtatDevis;

    /**
     * @var float
     *
     * @ORM\Column(name="montantHtDevis", type="float")
     */
    private $montantHtDevis;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTvaDevis", type="float")
     */
    private $montantTvaDevis;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTvTCDevis", type="float")
     */
    private $montantTvTCDevis;

    /**
     * @var string
     *
     * @ORM\Column(name="libDevis", type="string", length=255)
     */
    private $libDevis;

    /**
     * @var string
     *
     * @ORM\Column(name="libPrecisions", type="string", length=255)
     */
    private $libPrecisions;

    /**
     * @ORM\ManyToOne(targetEntity="FacturationBundle\Entity\TVA")
     * @ORM\JoinColumn(nullable=false)
     */
    private $laTVA;

    /**
     * @ORM\ManyToOne(targetEntity="FacturationBundle\Entity\Client")
     * @ORM\JoinColumn(nullable=false)
     */
    private  $leClient;


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
     * Set numVersionDevis
     *
     * @param integer $numVersionDevis
     *
     * @return Devis
     */
    public function setNumVersionDevis($numVersionDevis)
    {
        $this->numVersionDevis = $numVersionDevis;

        return $this;
    }

    /**
     * Get numVersionDevis
     *
     * @return int
     */
    public function getNumVersionDevis()
    {
        return $this->numVersionDevis;
    }

    

    /**
     * Set dateDevis
     *
     * @param \DateTime $dateDevis
     *
     * @return Devis
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
     * Set numTempsValidite
     *
     * @param integer $numTempsValidite
     *
     * @return Devis
     */
    public function setNumTempsValidite($numTempsValidite)
    {
        $this->numTempsValidite = $numTempsValidite;

        return $this;
    }

    /**
     * Get numTempsValidite
     *
     * @return int
     */
    public function getNumTempsValidite()
    {
        return $this->numTempsValidite;
    }

    /**
     * Set codeEtatDevis
     *
     * @param string $codeEtatDevis
     *
     * @return Devis
     */
    public function setCodeEtatDevis($codeEtatDevis)
    {
        $this->codeEtatDevis = $codeEtatDevis;

        return $this;
    }

    /**
     * Get codeEtatDevis
     *
     * @return string
     */
    public function getCodeEtatDevis()
    {
        return $this->codeEtatDevis;
    }

    /**
     * Set montantHtDevis
     *
     * @param float $montantHtDevis
     *
     * @return Devis
     */
    public function setMontantHtDevis($montantHtDevis)
    {
        $this->montantHtDevis = $montantHtDevis;

        return $this;
    }

    /**
     * Get montantHtDevis
     *
     * @return float
     */
    public function getMontantHtDevis()
    {
        return $this->montantHtDevis;
    }

    /**
     * Set montantTvaDevis
     *
     * @param float $montantTvaDevis
     *
     * @return Devis
     */
    public function setMontantTvaDevis($montantTvaDevis)
    {
        $this->montantTvaDevis = $montantTvaDevis;

        return $this;
    }

    /**
     * Get montantTvaDevis
     *
     * @return float
     */
    public function getMontantTvaDevis()
    {
        return $this->montantTvaDevis;
    }

    /**
     * Set montantTvTCDevis
     *
     * @param float $montantTvTCDevis
     *
     * @return Devis
     */
    public function setMontantTvTCDevis($montantTvTCDevis)
    {
        $this->montantTvTCDevis = $montantTvTCDevis;

        return $this;
    }

    /**
     * Get montantTvTCDevis
     *
     * @return float
     */
    public function getMontantTvTCDevis()
    {
        return $this->montantTvTCDevis;
    }

    /**
     * Set libDevis
     *
     * @param string $libDevis
     *
     * @return Devis
     */
    public function setLibDevis($libDevis)
    {
        $this->libDevis = $libDevis;

        return $this;
    }

    /**
     * Get libDevis
     *
     * @return string
     */
    public function getLibDevis()
    {
        return $this->libDevis;
    }

    /**
     * Set libPrecisions
     *
     * @param string $libPrecisions
     *
     * @return Devis
     */
    public function setLibPrecisions($libPrecisions)
    {
        $this->libPrecisions = $libPrecisions;

        return $this;
    }

    /**
     * Get libPrecisions
     *
     * @return string
     */
    public function getLibPrecisions()
    {
        return $this->libPrecisions;
    }

    /**
     * Set anneeDevis
     *
     * @param integer $anneeDevis
     *
     * @return Devis
     */
    public function setAnneeDevis($anneeDevis)
    {
        $this->anneeDevis = $anneeDevis;

        return $this;
    }

    /**
     * Get anneeDevis
     *
     * @return integer
     */
    public function getAnneeDevis()
    {
        return $this->anneeDevis;
    }

    /**
     * Set laTVA
     *
     * @param \FacturationBundle\Entity\TVA $laTVA
     *
     * @return Devis
     */
    public function setLaTVA(\FacturationBundle\Entity\TVA $laTVA)
    {
        $this->laTVA = $laTVA;

        return $this;
    }

    /**
     * Get laTVA
     *
     * @return \FacturationBundle\Entity\TVA
     */
    public function getLaTVA()
    {
        return $this->laTVA;
    }

    /**
     * Set leClient
     *
     * @param \FacturationBundle\Entity\Client $leClient
     *
     * @return Devis
     */
    public function setLeClient(\FacturationBundle\Entity\Client $leClient)
    {
        $this->leClient = $leClient;

        return $this;
    }

    /**
     * Get leClient
     *
     * @return \FacturationBundle\Entity\Client
     */
    public function getLeClient()
    {
        return $this->leClient;
    }
    public function __toString()
    {
        return $this->libDevis;
    }
}
