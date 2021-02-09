<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="client")
 */
class Client
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="string")
     */
    private $nom;
    /**
     * @Column(type="string")
     */
    private $prenom;
    /**
     * @Column(type="string")
     */
    private $adresse;
    /**
     * @Column(type="integer")
     */
    private $telephone;
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
    private $nomEmple;
    /**
     * @Column(type="string")
     */
    private $adresseEmple;
    /**
     * One client has many comptes. This is the inverse side.
     * @OneToMany(targetEntity="Compte", mappedBy="compte")
     */
    private $comptes;
    public function __construct()
    {
        $this->comptes = new ArrayCollection();
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
    public function getNom()
    {
        return $this->nom;
    }
    /**
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }
    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }
    /**
     * @return mixed
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
    /**
     * @param mixed $adresse
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }
    /**
     * @return mixed
     */
    public function getTelephone()
    {
        return $this->telephone;
    }
    /**
     * @param mixed $telephone
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }
    /**
     * @return mixed
     */
    public function getComptes()
    {
        return $this->comptes;
    }
    /**
     * @param mixed $comptes
     */
    public function setComptes($comptes)
    {
        $this->comptes = $comptes;
    }
    /**
     * @return mixed
     */
    public function getTravail()
    {
        return $this->travail;
    }
    /**
     * @param mixed $travail
     */
    public function setTravail($travail)
    {
        $this->travail = $travail;
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
    public function getProfessionl()
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
    public function getNomEmple()
    {
        return $this->nomEmple;
    }
    /**
     * @param mixed $nomEmple
     */
    public function setNomEmple($nomEmple)
    {
        $this->nomEmple = $nomEmple;
    }
    /**
     * @return mixed
     */
    public function getAdresseEmple()
    {
        return $this->adresseEmple;
    }
    /**
     * @param mixed $adresseEmple
     */
    public function setAdresseEmple($adresseEmple)
    {
        $this->adresseEmple = $adresseEmple;
    }
}
