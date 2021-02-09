<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="compte")
 */
class Compte
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
    private $numeroCompte;
    /**
     * @Column(type="string")
     */
    private $rib;
    /**
     * @Column(type="decimal")
     */
    private $montant;
    /**
     * @Column(type="string")
     */
    private $dateCreation;
    /**
     * @Column(type="string")
     */
    private $dateFinBlocage;
    /**
     * @Column(type="string")
     */
    private $dateDebutGele;
    /**
     * @Column(type="string")
     */
    private $dateFinGele;
    /**
     * Many comptes have one etat. This is the owning side.
     * @ManyToOne(targetEntity="typeCompte", inversedBy="comptes")
     * @JoinColumn(name="type_id", referencedColumnName="id")
     */

    private $type;
    /**
     * Many comptes have one client. This is the owning side.
     * @ManyToOne(targetEntity="Client", inversedBy="comptes")
     * @JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client;
    /**
     * Many comptes have one client. This is the owning side.
     * @ManyToOne(targetEntity="User", inversedBy="comptes")
     * @JoinColumn(name="responsable_id", referencedColumnName="id")
     */
    private $user;
    /**
     * One compte has many operations. This is the inverse side.
     * @OneToMany(targetEntity="Operation", mappedBy="compte")
     */
    private $operations;
    public function __construct()
    {
        $this->operations = new ArrayCollection();
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
    public function getNumeroCompte()
    {
        return $this->numeroCompte;
    }
    /**
     * @param mixed $numeroCompte
     */
    public function setNumeroCompte($numeroCompte)
    {
        $this->numeroCompte = $numeroCompte;
    }
    /**
     * @return mixed
     */
    public function getrib()
    {
        return $this->rib;
    }
    /**
     * @param mixed $Rib
     */
    public function seteRib($rib)
    {
        $this->rib = $rib;
    }
    /**
     * @return mixed
     */
    public function getMontant()
    {
        return $this->montant;
    }
    /**
     * @param mixed $montant
     */
    public function setMontant($montant)
    {
        $this->montant = $montant;
    }
    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }
    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }
    /**
     * @return mixed
     */
    public function getDateFinBlocage()
    {
        return $this->dateFinBlocage;
    }
    /**
     * @param mixed $dateFinBlocage
     */
    public function setDateFinBlocage($dateFinBlocage)
    {
        $this->dateFinBlocage = $dateFinBlocage;
    }
    /**
     * @return mixed
     */
    public function getDateDebutGele()
    {
        return $this->dateDebutGele;
    }
    /**
     * @param mixed $dateDebutGele
     */
    public function setDateDebutGele($dateDebutGele)
    {
        $this->dateDebutGele = $dateDebutGele;
    }
    /**
     * @return mixed
     */
    public function getDateFinGele()
    {
        return $this->dateFinGele;
    }
    /**
     * @param mixed $dateFinGele
     */
    public function setDateFinGele($dateFinGele)
    {
        $this->dateFinGele = $dateFinGele;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
    /**
     * @return mixed
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * @param mixed $client
     */
    public function setClient($client)
    {
        $this->client = $client;
    }
    /**
     * @return mixed
     */
    public function getResponsable()
    {
        return $this->responsable;
    }
    /**
     * @param mixed $responsable
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;
    }
    /**
     * @return mixed
     */
    public function getOperations()
    {
        return $this->operations;
    }
    /**
     * @param mixed $operations
     */
    public function setOperations($operations)
    {
        $this->operations = $operations;
    }
}
