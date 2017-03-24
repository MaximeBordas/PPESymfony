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
     * @ORM\Column(name="numClient", type="integer")
     */
    private $numClient;

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
     * Set numClient
     *
     * @param integer $numClient
     *
     * @return Devis
     */
    public function setNumClient($numClient)
    {
        $this->numClient = $numClient;

        return $this;
    }

    /**
     * Get numClient
     *
     * @return int
     */
    public function getNumClient()
    {
        return $this->numClient;
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
}
