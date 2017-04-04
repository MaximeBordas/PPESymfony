<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategPrestation
 *
 * @ORM\Table(name="categ_prestation")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\CategPrestationRepository")
 */
class CategPrestation
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
     * @ORM\Column(name="libCategPrestation", type="string", length=255)
     */
    private $libCategPrestation;


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
     * Set libCategPrestation
     *
     * @param string $libCategPrestation
     *
     * @return CategPrestation
     */
    public function setLibCategPrestation($libCategPrestation)
    {
        $this->libCategPrestation = $libCategPrestation;

        return $this;
    }

    /**
     * Get libCategPrestation
     *
     * @return string
     */
    public function getLibCategPrestation()
    {
        return $this->libCategPrestation;
    }
}

