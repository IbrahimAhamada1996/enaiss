<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ExtraitRepository")
 */
class Extrait
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naiss;

    /**
     * @ORM\Column(type="string", length=70)
     */
    private $lieu_naiss;

    /**
     * @ORM\Column(type="time")
     */
    private $heure_naiss;

    /**
     * @ORM\Column(type="time")
     */
    private $minute_naiss;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_enfant;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $sexe_enfant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_pere;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naiss_pere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_naiss_pere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession_pere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_pere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_mere;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naiss_mere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress_naiss_mere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession_mere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_mere;

    /**
     * @ORM\Column(type="text")
     */
    private $mention_marginal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prefecture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateNaiss(): ?\DateTimeInterface
    {
        return $this->date_naiss;
    }

    public function setDateNaiss(\DateTimeInterface $date_naiss): self
    {
        $this->date_naiss = $date_naiss;

        return $this;
    }

    public function getLieuNaiss(): ?string
    {
        return $this->lieu_naiss;
    }

    public function setLieuNaiss(string $lieu_naiss): self
    {
        $this->lieu_naiss = $lieu_naiss;

        return $this;
    }

    public function getHeureNaiss(): ?\DateTimeInterface
    {
        return $this->heure_naiss;
    }

    public function setHeureNaiss(\DateTimeInterface $heure_naiss): self
    {
        $this->heure_naiss = $heure_naiss;

        return $this;
    }

    public function getMinuteNaiss(): ?\DateTimeInterface
    {
        return $this->minute_naiss;
    }

    public function setMinuteNaiss(\DateTimeInterface $minute_naiss): self
    {
        $this->minute_naiss = $minute_naiss;

        return $this;
    }

    public function getNomEnfant(): ?string
    {
        return $this->nom_enfant;
    }

    public function setNomEnfant(string $nom_enfant): self
    {
        $this->nom_enfant = $nom_enfant;

        return $this;
    }

    public function getSexeEnfant(): ?string
    {
        return $this->sexe_enfant;
    }

    public function setSexeEnfant(string $sexe_enfant): self
    {
        $this->sexe_enfant = $sexe_enfant;

        return $this;
    }

    public function getNomPere(): ?string
    {
        return $this->nom_pere;
    }

    public function setNomPere(string $nom_pere): self
    {
        $this->nom_pere = $nom_pere;

        return $this;
    }

    public function getDateNaissPere(): ?\DateTimeInterface
    {
        return $this->date_naiss_pere;
    }

    public function setDateNaissPere(\DateTimeInterface $date_naiss_pere): self
    {
        $this->date_naiss_pere = $date_naiss_pere;

        return $this;
    }

    public function getAdressNaissPere(): ?string
    {
        return $this->adress_naiss_pere;
    }

    public function setAdressNaissPere(string $adress_naiss_pere): self
    {
        $this->adress_naiss_pere = $adress_naiss_pere;

        return $this;
    }

    public function getProfessionPere(): ?string
    {
        return $this->profession_pere;
    }

    public function setProfessionPere(string $profession_pere): self
    {
        $this->profession_pere = $profession_pere;

        return $this;
    }

    public function getVillePere(): ?string
    {
        return $this->ville_pere;
    }

    public function setVillePere(string $ville_pere): self
    {
        $this->ville_pere = $ville_pere;

        return $this;
    }

    public function getNomMere(): ?string
    {
        return $this->nom_mere;
    }

    public function setNomMere(string $nom_mere): self
    {
        $this->nom_mere = $nom_mere;

        return $this;
    }

    public function getDateNaissMere(): ?\DateTimeInterface
    {
        return $this->date_naiss_mere;
    }

    public function setDateNaissMere(\DateTimeInterface $date_naiss_mere): self
    {
        $this->date_naiss_mere = $date_naiss_mere;

        return $this;
    }

    public function getAdressNaissMere(): ?string
    {
        return $this->adress_naiss_mere;
    }

    public function setAdressNaissMere(string $adress_naiss_mere): self
    {
        $this->adress_naiss_mere = $adress_naiss_mere;

        return $this;
    }

    public function getProfessionMere(): ?string
    {
        return $this->profession_mere;
    }

    public function setProfessionMere(string $profession_mere): self
    {
        $this->profession_mere = $profession_mere;

        return $this;
    }

    public function getVilleMere(): ?string
    {
        return $this->ville_mere;
    }

    public function setVilleMere(string $ville_mere): self
    {
        $this->ville_mere = $ville_mere;

        return $this;
    }

    public function getMentionMarginal(): ?string
    {
        return $this->mention_marginal;
    }

    public function setMentionMarginal(string $mention_marginal): self
    {
        $this->mention_marginal = $mention_marginal;

        return $this;
    }

    public function getPrefecture(): ?string
    {
        return $this->prefecture;
    }

    public function setPrefecture(string $prefecture): self
    {
        $this->prefecture = $prefecture;

        return $this;
    }
}
