<?php

namespace GSB\PlatformBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * RapportVisite
 *
 * @ORM\Table(name="rapport_visite")
 * @ORM\Entity(repositoryClass="GSB\PlatformBundle\Repository\RapportVisiteRepository")
 */
class RapportVisite
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
     * @ORM\ManyToOne(targetEntity="GSB\PlatformBundle\Entity\Visiteur")
     * @ORM\JoinColumn(nullable=true)
     */
    private $visiteur;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\PlatformBundle\Entity\Medecin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medecin;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\PlatformBundle\Entity\Medecin")
     * @ORM\JoinColumn(nullable=true)
     */
    private $medecinRemplacant;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="motif", type="string", length=255)
     */
    private $motif;

    /**
     * @var string
     *
     * @ORM\Column(name="bilan", type="text")
     */
    private $bilan;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\PlatformBundle\Entity\Medicament")
     * @ORM\JoinColumn(nullable=false)
     */
    private $medicament1;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\PlatformBundle\Entity\Medicament")
     * @ORM\JoinColumn(nullable=true)
     */
    private $medicament2;

    /**
     * @var bool
     *
     * @ORM\Column(name="documentation", type="boolean", nullable=true)
     */
    private $documentation;


    /**
     * @ORM\OneToMany(targetEntity="GSB\PlatformBundle\Entity\Echantillon", mappedBy="rapportVisite", cascade={"all"})
     */
    private $echantillons;

    public function __construct() {
        $this->date         = new \Datetime();
        $this->echantillons = new ArrayCollection();
    }

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
     * Set visiteur
     *
     * @param string $visiteur
     *
     * @return RapportVisite
     */
    public function setVisiteur($visiteur)
    {
        $this->visiteur = $visiteur;

        return $this;
    }

    /**
     * Get visiteur
     *
     * @return string
     */
    public function getVisiteur()
    {
        return $this->visiteur;
    }

    /**
     * Set medecin
     *
     * @param string $medecin
     *
     * @return RapportVisite
     */
    public function setMedecin($medecin)
    {
        $this->medecin = $medecin;

        return $this;
    }

    /**
     * Get medecin
     *
     * @return string
     */
    public function getMedecin()
    {
        return $this->medecin;
    }

    /**
     * Set medecinRemplacant
     *
     * @param string $medecinRemplacant
     *
     * @return RapportVisite
     */
    public function setMedecinRemplacant($medecinRemplacant)
    {
        $this->medecinRemplacant = $medecinRemplacant;

        return $this;
    }

    /**
     * Get medecinRemplacant
     *
     * @return string
     */
    public function getMedecinRemplacant()
    {
        return $this->medecinRemplacant;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return RapportVisite
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set bilan
     *
     * @param string $bilan
     *
     * @return RapportVisite
     */
    public function setBilan($bilan)
    {
        $this->bilan = $bilan;

        return $this;
    }

    /**
     * Get bilan
     *
     * @return string
     */
    public function getBilan()
    {
        return $this->bilan;
    }

    /**
     * Set motif
     *
     * @param string $motif
     *
     * @return RapportVisite
     */
    public function setMotif($motif)
    {
        $this->motif = $motif;

        return $this;
    }

    /**
     * Get motif
     *
     * @return string
     */
    public function getMotif()
    {
        return $this->motif;
    }

    /**
     * Set medicament1
     *
     * @param string $medicament1
     *
     * @return RapportVisite
     */
    public function setMedicament1($medicament1)
    {
        $this->medicament1 = $medicament1;

        return $this;
    }

    /**
     * Get medicament1
     *
     * @return string
     */
    public function getMedicament1()
    {
        return $this->medicament1;
    }

    /**
     * Set medicament2
     *
     * @param string $medicament2
     *
     * @return RapportVisite
     */
    public function setMedicament2($medicament2)
    {
        $this->medicament2 = $medicament2;

        return $this;
    }

    /**
     * Get medicament2
     *
     * @return string
     */
    public function getMedicament2()
    {
        return $this->medicament2;
    }

    /**
     * Set documentation
     *
     * @param boolean $documentation
     *
     * @return RapportVisite
     */
    public function setDocumentation($documentation)
    {
        $this->documentation = $documentation;

        return $this;
    }

    /**
     * Get documentation
     *
     * @return bool
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * Add echantillon
     *
     * @param \GSB\PlatformBundle\Entity\Echantillon $echantillon
     *
     * @return RapportVisite
     */
    public function addEchantillon(\GSB\PlatformBundle\Entity\Echantillon $echantillon)
    {
        $this->echantillons[] = $echantillon;

        return $this;
    }

    /**
     * Remove echantillon
     *
     * @param \GSB\PlatformBundle\Entity\Echantillon $echantillon
     */
    public function removeEchantillon(\GSB\PlatformBundle\Entity\Echantillon $echantillon)
    {
        $this->echantillons->removeElement($echantillon);
    }

    /**
     * Get echantillons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEchantillons()
    {
        return $this->echantillons;
    }
}
