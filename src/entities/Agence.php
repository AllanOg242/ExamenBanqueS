<?php
use Doctrine\ORM\Annotation as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @Entity
 * @Table(name="agence")
 */
class Agence
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
    private $ville;
    /**
     * @Column(type="string")
     */
    private $region;
    /**
     * @Column(type="string")
     */
    private $numero;
    /**
     * One agence has many users. This is the inverse side.
     * @OneToMany(targetEntity="User", mappedBy="agence")
     */
    private $user;
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
    public function getVille()
    {
        return $this->ville;
    }
    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }
    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }
    /**
     * @return mixed
     */
    public function getNumero()
    {
        return $this->numero;
    }
    /**
     * @param mixed $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}