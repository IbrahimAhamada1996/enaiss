<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DeclarationNaissRepository")
 * @ORM\Table(name="enaiss_declarationNaisss")
 */
class DeclarationNaiss
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sousigne;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomme;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $epouse;

    /**
     * @ORM\Column(type="integer")
     */
    private $age_mere;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $profession;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="date")
     */
    private $date_naiss;


    /**
     * @ORM\Column(type="datetime")
     */
    private $date_heure_accouch;



    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sexe_enfant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_enfant;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_enfant;

    /**
     * @ORM\Column(type="date")
     */
    private $date_decla;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_declare;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Personnel", mappedBy="declaration")
     */
    private $personnels;

    public function __construct()
    {
        $this->personnels = new ArrayCollection();
    }



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSousigne(): ?string
    {
        return $this->sousigne;
    }

    public function setSousigne(?string $sousigne): self
    {
        $this->sousigne = $sousigne;

        return $this;
    }

    public function getNomme(): ?string
    {
        return $this->nomme;
    }

    public function setNomme(string $nomme): self
    {
        $this->nomme = $nomme;

        return $this;
    }

    public function getEpouse(): ?string
    {
        return $this->epouse;
    }

    public function setEpouse(string $epouse): self
    {
        $this->epouse = $epouse;

        return $this;
    }

    public function getAgeMere(): ?int
    {
        return $this->age_mere;
    }

    public function setAgeMere(int $age_mere): self
    {
        $this->age_mere = $age_mere;

        return $this;
    }

    public function getProfession(): ?string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): self
    {
        $this->profession = $profession;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
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


    public function getDateHeureAccouch(): ?\DateTimeInterface
    {
        return $this->date_heure_accouch;
    }

    public function setDateHeureAccouch(\DateTimeInterface $date_heure_accouch): self
    {
        $this->date_heure_accouch = $date_heure_accouch;

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

    public function getNomEnfant(): ?string
    {
        return $this->nom_enfant;
    }

    public function setNomEnfant(string $nom_enfant): self
    {
        $this->nom_enfant = $nom_enfant;

        return $this;
    }

    public function getPrenomEnfant(): ?string
    {
        return $this->prenom_enfant;
    }

    public function setPrenomEnfant(string $prenom_enfant): self
    {
        $this->prenom_enfant = $prenom_enfant;

        return $this;
    }

    public function getDateDecla(): ?\DateTimeInterface
    {
        return $this->date_decla;
    }

    public function setDateDecla(\DateTimeInterface $date_decla): self
    {
        $this->date_decla = $date_decla;

        return $this;
    }

    public function getLieuDeclare(): ?string
    {
        return $this->lieu_declare;
    }

    public function setLieuDeclare(string $lieu_declare): self
    {
        $this->lieu_declare = $lieu_declare;

        return $this;
    }

    /**
     * @return Collection|Personnel[]
     */
    public function getPersonnels(): Collection
    {
        return $this->personnels;
    }

    public function addPersonnel(Personnel $personnel): self
    {
        if (!$this->personnels->contains($personnel)) {
            $this->personnels[] = $personnel;
            $personnel->setDeclaration($this);
        }

        return $this;
    }

    public function removePersonnel(Personnel $personnel): self
    {
        if ($this->personnels->contains($personnel)) {
            $this->personnels->removeElement($personnel);
            // set the owning side to null (unless already changed)
            if ($personnel->getDeclaration() === $this) {
                $personnel->setDeclaration(null);
            }
        }

        return $this;
    }   
}
