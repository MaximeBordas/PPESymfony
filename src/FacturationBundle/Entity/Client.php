<?php

namespace FacturationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="FacturationBundle\Repository\ClientRepository")
 */
class Client
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
     * @ORM\Column(name="civiliteClient", type="string", length=255)
     */
    private $civiliteClient;

    /**
     * @var string
     *
     * @ORM\Column(name="nomClient", type="string", length=255)
     */
    private $nomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomClient", type="string", length=255)
     */
    private $prenomClient;

    /**
     * @var string
     *
     * @ORM\Column(name="rueClient", type="string", length=255)
     */
    private $rueClient;

    /**
     * @var string
     *
     * @ORM\Column(name="codePostalClient", type="string", length=255)
     */
    private $codePostalClient;

    /**
     * @var string
     *
     * @ORM\Column(name="villeClient", type="string", length=255)
     */
    private $villeClient;

    /**
     * @var int
     *
     * @ORM\Column(name="telephoneFixeClient", type="integer")
     */
    private $telephoneFixeClient;

    /**
     * @var int
     *
     * @ORM\Column(name="telephonePortableClient", type="integer")
     */
    private $telephonePortableClient;

    /**
     * @var int
     *
     * @ORM\Column(name="numTypeClient", type="integer")
     */
    private $numTypeClient;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaireClient", type="string", length=5000)
     */
    private $commentaireClient;


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
     * Set civiliteClient
     *
     * @param string $civiliteClient
     *
     * @return Client
     */
    public function setCiviliteClient($civiliteClient)
    {
        $this->civiliteClient = $civiliteClient;

        return $this;
    }

    /**
     * Get civiliteClient
     *
     * @return string
     */
    public function getCiviliteClient()
    {
        return $this->civiliteClient;
    }

    /**
     * Set nomClient
     *
     * @param string $nomClient
     *
     * @return Client
     */
    public function setNomClient($nomClient)
    {
        $this->nomClient = $nomClient;

        return $this;
    }

    /**
     * Get nomClient
     *
     * @return string
     */
    public function getNomClient()
    {
        return $this->nomClient;
    }

    /**
     * Set prenomClient
     *
     * @param string $prenomClient
     *
     * @return Client
     */
    public function setPrenomClient($prenomClient)
    {
        $this->prenomClient = $prenomClient;

        return $this;
    }

    /**
     * Get prenomClient
     *
     * @return string
     */
    public function getPrenomClient()
    {
        return $this->prenomClient;
    }

    /**
     * Set rueClient
     *
     * @param string $rueClient
     *
     * @return Client
     */
    public function setRueClient($rueClient)
    {
        $this->rueClient = $rueClient;

        return $this;
    }

    /**
     * Get rueClient
     *
     * @return string
     */
    public function getRueClient()
    {
        return $this->rueClient;
    }

    /**
     * Set codePostalClient
     *
     * @param string $codePostalClient
     *
     * @return Client
     */
    public function setCodePostalClient($codePostalClient)
    {
        $this->codePostalClient = $codePostalClient;

        return $this;
    }

    /**
     * Get codePostalClient
     *
     * @return string
     */
    public function getCodePostalClient()
    {
        return $this->codePostalClient;
    }

    /**
     * Set villeClient
     *
     * @param string $villeClient
     *
     * @return Client
     */
    public function setVilleClient($villeClient)
    {
        $this->villeClient = $villeClient;

        return $this;
    }

    /**
     * Get villeClient
     *
     * @return string
     */
    public function getVilleClient()
    {
        return $this->villeClient;
    }

    /**
     * Set telephoneFixeClient
     *
     * @param integer $telephoneFixeClient
     *
     * @return Client
     */
    public function setTelephoneFixeClient($telephoneFixeClient)
    {
        $this->telephoneFixeClient = $telephoneFixeClient;

        return $this;
    }

    /**
     * Get telephoneFixeClient
     *
     * @return int
     */
    public function getTelephoneFixeClient()
    {
        return $this->telephoneFixeClient;
    }

    /**
     * Set telephonePortableClient
     *
     * @param integer $telephonePortableClient
     *
     * @return Client
     */
    public function setTelephonePortableClient($telephonePortableClient)
    {
        $this->telephonePortableClient = $telephonePortableClient;

        return $this;
    }

    /**
     * Get telephonePortableClient
     *
     * @return int
     */
    public function getTelephonePortableClient()
    {
        return $this->telephonePortableClient;
    }

    /**
     * Set numTypeClient
     *
     * @param integer $numTypeClient
     *
     * @return Client
     */
    public function setNumTypeClient($numTypeClient)
    {
        $this->numTypeClient = $numTypeClient;

        return $this;
    }

    /**
     * Get numTypeClient
     *
     * @return int
     */
    public function getNumTypeClient()
    {
        return $this->numTypeClient;
    }

    /**
     * Set commentaireClient
     *
     * @param string $commentaireClient
     *
     * @return Client
     */
    public function setCommentaireClient($commentaireClient)
    {
        $this->commentaireClient = $commentaireClient;

        return $this;
    }

    /**
     * Get commentaireClient
     *
     * @return string
     */
    public function getCommentaireClient()
    {
        return $this->commentaireClient;
    }
    public function __toString()
    {
        return $this->nomClient;
    }
}
