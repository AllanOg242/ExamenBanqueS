<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity
 * @Table(name="travail")
 */
class Travail
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="integer")
     */
    private $salaire;
    /**
     * @Column(type="string")
     */
    private $profession;
    /**
     * @Column(type="string")
     */
    private $nomEmployeur;
    /**
     * @Column(type="string")
     */
    private $raisonSociale;
    /**
     * @Column(type="string")
     */
    private $adresseEmp;
    /**
     * @Column(type="string")
     */
    private $numEmp;
    /**
     * @Column(type="integer")
     */
    private $client_id;

    /**
     * Travail constructor.
     */
    public function __construct()
    {
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * @param mixed $salaire
     */
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * @return mixed
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * @param mixed $profession
     */
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * @return mixed
     */
    public function getNomEmployeur()
    {
        return $this->nomEmployeur;
    }

    /**
     * @param mixed $nomEmployeur
     */
    public function setNomEmployeur($nomEmployeur)
    {
        $this->nomEmployeur = $nomEmployeur;
    }

    /**
     * @return mixed
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * @param mixed $raisonSociale
     */
    public function setRaisonSociale($raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;
    }

    /**
     * @return mixed
     */
    public function getAdresseEmp()
    {
        return $this->adresseEmp;
    }

    /**
     * @param mixed $adresseEmp
     */
    public function setAdresseEmp($adresseEmp)
    {
        $this->adresseEmp = $adresseEmp;
    }

    /**
     * @return mixed
     */
    public function getNumEmp()
    {
        return $this->numEmp;
    }

    /**
     * @param mixed $numEmp
     */
    public function setNumEmp($numEmp)
    {
        $this->numEmp = $numEmp;
    }

    /**
     * @return mixed
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * @param mixed $client_id
     */
    public function setClientId($client_id)
    {
        $this->client_id = $client_id;
    }



}