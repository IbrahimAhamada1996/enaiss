<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommuneRepository")
 * @ORM\Table(name="enaiss_communes")
 */
class Commune
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
    private $ile;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\LieuTravail", mappedBy="commune")
     */
    private $lieuTravails;

    public function __construct()
    {
        $this->lieuTravails = new ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->getNom();
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

    public function getIle(): ?string
    {
        return $this->ile;
    }

    public function setIle(string $ile): self
    {
        $this->ile = $ile;

        return $this;
    }

    /**
     * @return Collection|LieuTravail[]
     */
    public function getLieuTravails(): Collection
    {
        return $this->lieuTravails;
    }

    public function addLieuTravail(LieuTravail $lieuTravail): self
    {
        if (!$this->lieuTravails->contains($lieuTravail)) {
            $this->lieuTravails[] = $lieuTravail;
            $lieuTravail->setCommune($this);
        }

        return $this;
    }

    public function removeLieuTravail(LieuTravail $lieuTravail): self
    {
        if ($this->lieuTravails->contains($lieuTravail)) {
            $this->lieuTravails->removeElement($lieuTravail);
            // set the owning side to null (unless already changed)
            if ($lieuTravail->getCommune() === $this) {
                $lieuTravail->setCommune(null);
            }
        }

        return $this;
    }
}
