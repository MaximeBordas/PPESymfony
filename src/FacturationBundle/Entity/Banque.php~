<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Banque
 *
 * @ORM\Table(name="banque")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\BanqueRepository")
 */
class Banque
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
     * @ORM\Column(name="libBanque", type="string", length=255)
     */
    private $libBanque;





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
     * Set libBanque
     *
     * @param string $libBanque
     *
     * @return Banque
     */
    public function setLibBanque($libBanque)
    {
        $this->libBanque = $libBanque;

        return $this;
    }

    /**
     * Get libBanque
     *
     * @return string
     */
    public function getLibBanque()
    {
        return $this->libBanque;
    }
}
