<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity
 * @Table(name="operation")
 */
class Operation
{
    /**
     * @Id
     * @Column(type="integer")
     * @GeneratedValue
     */
    private $id;
    /**
     * @Column(type="decimal")
     */
    private $montant;
    /**
     * @Column(type="string")
     */
    private $dateOperation;
    /**
     * @Column(type="integer")
     */
    private $idTypeOp;
//    /**
//     * Many operations have one compte. This is the owning side.
//     * @ManyToOne(targetEntity="Compte", inversedBy="operations")
//     * @JoinColumn(name="compte_id", referencedColumnName="id")
//     */
//    private $compte;

    /**
     * Operation constructor.
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
    public function getDateOperation()
    {
        return $this->dateOperation;
    }

    /**
     * @param mixed $dateOperation
     */
    public function setDateOperation($dateOperation)
    {
        $this->dateOperation = $dateOperation;
    }

    /**
     * @return mixed
     */
    public function getIdTypeOp()
    {
        return $this->idTypeOp;
    }

    /**
     * @param mixed $idTypeOp
     */
    public function setIdTypeOp($idTypeOp)
    {
        $this->idTypeOp = $idTypeOp;
    }



}