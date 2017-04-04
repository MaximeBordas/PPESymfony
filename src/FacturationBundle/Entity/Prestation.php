<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prestation
 *
 * @ORM\Table(name="prestation")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\PrestationRepository")
 */
class Prestation
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
     * @var string
     *
     * @ORM\Column(name="libPrestation", type="string", length=255)
     */
    private $libPrestation;

    /**
     * @var string
     *
     * @ORM\Column(name="libPrestationRed", type="string", length=255)
     */
    private $libPrestationRed;

    /**
     * @var string
     *
     * @ORM\Column(name="unitePrestation", type="string", length=255)
     */
    private $unitePrestation;

    /**
     * @var float
     *
     * @ORM\Column(name="prixPrestation", type="float")
     */
    private $prixPrestation;


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
     * Set libPrestation
     *
     * @param string $libPrestation
     *
     * @return Prestation
     */
    public function setLibPrestation($libPrestation)
    {
        $this->libPrestation = $libPrestation;

        return $this;
    }

    /**
     * Get libPrestation
     *
     * @return string
     */
    public function getLibPrestation()
    {
        return $this->libPrestation;
    }

    /**
     * Set libPrestationRed
     *
     * @param string $libPrestationRed
     *
     * @return Prestation
     */
    public function setLibPrestationRed($libPrestationRed)
    {
        $this->libPrestationRed = $libPrestationRed;

        return $this;
    }

    /**
     * Get libPrestationRed
     *
     * @return string
     */
    public function getLibPrestationRed()
    {
        return $this->libPrestationRed;
    }

    /**
     * Set unitePrestation
     *
     * @param string $unitePrestation
     *
     * @return Prestation
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
     * Set prixPrestation
     *
     * @param float $prixPrestation
     *
     * @return Prestation
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
}

