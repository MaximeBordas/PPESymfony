<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Support
 *
 * @ORM\Table(name="support")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\SupportRepository")
 */
class Support
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
     * @ORM\Column(name="libSupport", type="string", length=255)
     */
    private $libSupport;


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
     * Set libSupport
     *
     * @param string $libSupport
     *
     * @return Support
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
}

