<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TVA
 *
 * @ORM\Table(name="t_v_a")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\TVARepository")
 */
class TVA
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
     * @ORM\Column(name="tauxTva", type="integer")
     */
    private $tauxTva;


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
     * Set tauxTva
     *
     * @param integer $tauxTva
     *
     * @return TVA
     */
    public function setTauxTva($tauxTva)
    {
        $this->tauxTva = $tauxTva;

        return $this;
    }

    /**
     * Get tauxTva
     *
     * @return int
     */
    public function getTauxTva()
    {
        return $this->tauxTva;
    }

}
