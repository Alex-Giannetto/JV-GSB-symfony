<?php

namespace GSB\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Medicament
 *
 * @ORM\Table(name="medicament")
 * @ORM\Entity(repositoryClass="GSB\PlatformBundle\Repository\MedicamentRepository")
 */
class Medicament
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
     * @ORM\Column(name="depotLegal", type="string", length=10, unique=true)
     */
    private $depotLegal;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;


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
     * Set depotLegal
     *
     * @param string $depotLegal
     *
     * @return Medicament
     */
    public function setDepotLegal($depotLegal)
    {
        $this->depotLegal = $depotLegal;

        return $this;
    }

    /**
     * Get depotLegal
     *
     * @return string
     */
    public function getDepotLegal()
    {
        return $this->depotLegal;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Medicament
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }


    public function getlabel(){
        return $this->libelle;
    }
}

