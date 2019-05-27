<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LieuTravailRepository")
 */
class LieuTravail
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
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adress;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\commune", mappedBy="lieuTravail")
     */
    private $idcom;

    public function __construct()
    {
        $this->idcom = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return Collection|commune[]
     */
    public function getIdcom(): Collection
    {
        return $this->idcom;
    }

    public function addIdcom(commune $idcom): self
    {
        if (!$this->idcom->contains($idcom)) {
            $this->idcom[] = $idcom;
            $idcom->setLieuTravail($this);
        }

        return $this;
    }

    public function removeIdcom(commune $idcom): self
    {
        if ($this->idcom->contains($idcom)) {
            $this->idcom->removeElement($idcom);
            // set the owning side to null (unless already changed)
            if ($idcom->getLieuTravail() === $this) {
                $idcom->setLieuTravail(null);
            }
        }

        return $this;
    }
}
