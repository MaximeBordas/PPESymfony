<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModeReglement
 *
 * @ORM\Table(name="mode_reglement")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\ModeReglementRepository")
 */
class ModeReglement
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
     * @ORM\Column(name="libModReglement", type="string", length=255)
     */
    private $libModReglement;


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
     * Set libModReglement
     *
     * @param string $libModReglement
     *
     * @return ModeReglement
     */
    public function setLibModReglement($libModReglement)
    {
        $this->libModReglement = $libModReglement;

        return $this;
    }

    /**
     * Get libModReglement
     *
     * @return string
     */
    public function getLibModReglement()
    {
        return $this->libModReglement;
    }
}
