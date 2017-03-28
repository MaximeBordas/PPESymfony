<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturePrestation
 *
 * @ORM\Table(name="facture_prestation")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\FacturePrestationRepository")
 */
class FacturePrestation
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
     * @ORM\Column(name="numLigne", type="integer")
     */
    private $numLigne;

    /**
     * @var int
     *
     * @ORM\Column(name="quantitePrestation", type="integer")
     */
    private $quantitePrestation;

    /**
     * @var float
     *
     * @ORM\Column(name="prixPrestation", type="float")
     */
    private $prixPrestation;

    /**
     * @var float
     *
     * @ORM\Column(name="montantHtPrestation", type="float")
     */
    private $montantHtPrestation;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTvaPrestation", type="float")
     */
    private $montantTvaPrestation;

    /**
     * @var float
     *
     * @ORM\Column(name="montantTtcPrestation", type="float")
     */
    private $montantTtcPrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="libSupport", type="string", length=255)
     */
    private $libSupport;

    /**
     * @var string
     *
     * @ORM\Column(name="lib", type="string", length=255)
     */
    private $lib;

    /**
     * @var string
     *
     * @ORM\Column(name="unitePrestation", type="string", length=255)
     */
    private $unitePrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="libCateg", type="string", length=255)
     */
    private $libCateg;


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
     * Set numLigne
     *
     * @param integer $numLigne
     *
     * @return FacturePrestation
     */
    public function setNumLigne($numLigne)
    {
        $this->numLigne = $numLigne;

        return $this;
    }

    /**
     * Get numLigne
     *
     * @return int
     */
    public function getNumLigne()
    {
        return $this->numLigne;
    }

    /**
     * Set quantitePrestation
     *
     * @param integer $quantitePrestation
     *
     * @return FacturePrestation
     */
    public function setQuantitePrestation($quantitePrestation)
    {
        $this->quantitePrestation = $quantitePrestation;

        return $this;
    }

    /**
     * Get quantitePrestation
     *
     * @return int
     */
    public function getQuantitePrestation()
    {
        return $this->quantitePrestation;
    }

    /**
     * Set prixPrestation
     *
     * @param float $prixPrestation
     *
     * @return FacturePrestation
     */
    public function setPrixPrestation($prixPrestation)
    {
        $this->prixPrestation = $prixPrestation;

        return $this;
    }

    /**
     * Get prixPrestation
     *
     * @return float
     */
    public function getPrixPrestation()
    {
        return $this->prixPrestation;
    }

    /**
     * Set montantHtPrestation
     *
     * @param float $montantHtPrestation
     *
     * @return FacturePrestation
     */
    public function setMontantHtPrestation($montantHtPrestation)
    {
        $this->montantHtPrestation = $montantHtPrestation;

        return $this;
    }

    /**
     * Get montantHtPrestation
     *
     * @return float
     */
    public function getMontantHtPrestation()
    {
        return $this->montantHtPrestation;
    }

    /**
     * Set montantTvaPrestation
     *
     * @param float $montantTvaPrestation
     *
     * @return FacturePrestation
     */
    public function setMontantTvaPrestation($montantTvaPrestation)
    {
        $this->montantTvaPrestation = $montantTvaPrestation;

        return $this;
    }

    /**
     * Get montantTvaPrestation
     *
     * @return float
     */
    public function getMontantTvaPrestation()
    {
        return $this->montantTvaPrestation;
    }


    /**
     * Set libSupport
     *
     * @param string $libSupport
     *
     * @return FacturePrestation
     */
    public function setLibSupport($libSupport)
    {
        $this->libSupport = $libSupport;

        return $this;
    }

    /**
     * Get libSupport
     *
     * @return string
     */
    public function getLibSupport()
    {
        return $this->libSupport;
    }

    /**
     * Set lib
     *
     * @param string $lib
     *
     * @return FacturePrestation
     */
    public function setLib($lib)
    {
        $this->lib = $lib;

        return $this;
    }

    /**
     * Get lib
     *
     * @return string
     */
    public function getLib()
    {
        return $this->lib;
    }

    /**
     * Set unitePrestation
     *
     * @param string $unitePrestation
     *
     * @return FacturePrestation
     */
    public function setUnitePrestation($unitePrestation)
    {
        $this->unitePrestation = $unitePrestation;

        return $this;
    }

    /**
     * Get unitePrestation
     *
     * @return string
     */
    public function getUnitePrestation()
    {
        return $this->unitePrestation;
    }

    /**
     * Set libCateg
     *
     * @param string $libCateg
     *
     * @return FacturePrestation
     */
    public function setLibCateg($libCateg)
    {
        $this->libCateg = $libCateg;

        return $this;
    }

    /**
     * Get libCateg
     *
     * @return string
     */
    public function getLibCateg()
    {
        return $this->libCateg;
    }

    /**
     * Set montantTtcPrestation
     *
     * @param float $montantTtcPrestation
     *
     * @return FacturePrestation
     */
    public function setMontantTtcPrestation($montantTtcPrestation)
    {
        $this->montantTtcPrestation = $montantTtcPrestation;

        return $this;
    }

    /**
     * Get montantTtcPrestation
     *
     * @return float
     */
    public function getMontantTtcPrestation()
    {
        return $this->montantTtcPrestation;
    }

}
