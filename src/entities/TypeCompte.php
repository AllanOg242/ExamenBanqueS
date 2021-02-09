<?php
use Doctrine\ORM\Annotation as ORM;

/**
 * @Entity
 * @Table(name="typeCompte")
 */
class TypeCompte
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
    private $libelle;
    /**
     * @Column(type="integer")
     */
    private $agios;

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
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * @param mixed $libelle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    }

    /**
     * @return mixed
     */
    public function getAgios()
    {
        return $this->agios;
    }

    /**
     * @param mixed $agios
     */
    public function setAgios($agios)
    {
        $this->agios = $agios;
    }


}