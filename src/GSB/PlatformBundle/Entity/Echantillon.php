<?php

namespace GSB\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echantillon
 *
 * @ORM\Table(name="echantillon")
 * @ORM\Entity(repositoryClass="GSB\PlatformBundle\Repository\EchantillonRepository")
 */
class Echantillon
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
     * @ORM\ManyToOne(targetEntity="GSB\PlatformBundle\Entity\RapportVisite", inversedBy="echantillons")
     * @ORM\JoinColumn(nullable=false)
     */
    private $rapportVisite;

    /**
     * @ORM\ManyToOne(targetEntity="GSB\PlatformBundle\Entity\Medicament")
     * @ORM\JoinColumn(nullable=true)
     */
    private $medicament;

    /**
     * @var string
     *
     * @ORM\Column(name="quantite", type="string", length=255)
     */
    private $quantite;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Echantillon
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

    /**
     * Set quantite
     *
     * @param string $quantite
     *
     * @return Echantillon
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return string
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set rapportVisite
     *
     * @param \GSB\PlatformBundle\Entity\RapportVisite $rapportVisite
     *
     * @return Echantillon
     */
    public function setRapportVisite(\GSB\PlatformBundle\Entity\RapportVisite $rapportVisite){
        $this->rapportVisite = $rapportVisite;
        return $this;
    }

    /**
     * Get rapportVisite
     *
     * @return \GSB\PlatformBundle\Entity\RapportVisite
     */
    public function getRapportVisite()
    {
        return $this->rapportVisite;
    }

    /**
     * Set medicament
     *
     * @param \GSB\PlatformBundle\Entity\Medicament $medicament
     *
     * @return Echantillon
     */
    public function setMedicament(\GSB\PlatformBundle\Entity\Medicament $medicament = null)
    {
        $this->medicament = $medicament;

        return $this;
    }

    /**
     * Get medicament
     *
     * @return \GSB\PlatformBundle\Entity\Medicament
     */
    public function getMedicament()
    {
        return $this->medicament;
    }
}
