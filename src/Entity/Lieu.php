<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LieuRepository")
 */
class Lieu
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $telephone;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Personnel", inversedBy="lieus")
     * @ORM\JoinColumn(nullable=false)
     */
    private $personnel;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Commune", mappedBy="lieu")
     */
    private $comunes;

    public function __construct()
    {
        $this->comunes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getPersonnel(): ?Personnel
    {
        return $this->personnel;
    }

    public function setPersonnel(?Personnel $personnel): self
    {
        $this->personnel = $personnel;

        return $this;
    }

    /**
     * @return Collection|Commune[]
     */
    public function getComunes(): Collection
    {
        return $this->comunes;
    }

    public function addComune(Commune $comune): self
    {
        if (!$this->comunes->contains($comune)) {
            $this->comunes[] = $comune;
            $comune->setLieu($this);
        }

        return $this;
    }

    public function removeComune(Commune $comune): self
    {
        if ($this->comunes->contains($comune)) {
            $this->comunes->removeElement($comune);
            // set the owning side to null (unless already changed)
            if ($comune->getLieu() === $this) {
                $comune->setLieu(null);
            }
        }

        return $this;
    }
}
