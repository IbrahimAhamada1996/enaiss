<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonnelRepository")
 */
class Personnel
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
    private $prenom;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Statue", mappedBy="personnel")
     */
    private $statues;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\DeclarationNaiss", mappedBy="personnel")
     */
    private $declarations;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Lieu", mappedBy="personnel")
     */
    private $lieus;

    public function __construct()
    {
        $this->statues = new ArrayCollection();
        $this->declarations = new ArrayCollection();
        $this->lieus = new ArrayCollection();
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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * @return Collection|Statue[]
     */
    public function getStatues(): Collection
    {
        return $this->statues;
    }

    public function addStatue(Statue $statue): self
    {
        if (!$this->statues->contains($statue)) {
            $this->statues[] = $statue;
            $statue->setPersonnel($this);
        }

        return $this;
    }

    public function removeStatue(Statue $statue): self
    {
        if ($this->statues->contains($statue)) {
            $this->statues->removeElement($statue);
            // set the owning side to null (unless already changed)
            if ($statue->getPersonnel() === $this) {
                $statue->setPersonnel(null);
            }
        }

        return $this;
    }


    /**
     * @return Collection|DeclarationNaiss[]
     */
    public function getDeclarations(): Collection
    {
        return $this->declarations;
    }

    public function addDeclaration(DeclarationNaiss $declaration): self
    {
        if (!$this->declarations->contains($declaration)) {
            $this->declarations[] = $declaration;
            $declaration->setPersonnel($this);
        }

        return $this;
    }

    public function removeDeclaration(DeclarationNaiss $declaration): self
    {
        if ($this->declarations->contains($declaration)) {
            $this->declarations->removeElement($declaration);
            // set the owning side to null (unless already changed)
            if ($declaration->getPersonnel() === $this) {
                $declaration->setPersonnel(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Lieu[]
     */
    public function getLieus(): Collection
    {
        return $this->lieus;
    }

    public function addLieus(Lieu $lieus): self
    {
        if (!$this->lieus->contains($lieus)) {
            $this->lieus[] = $lieus;
            $lieus->setPersonnel($this);
        }

        return $this;
    }

    public function removeLieus(Lieu $lieus): self
    {
        if ($this->lieus->contains($lieus)) {
            $this->lieus->removeElement($lieus);
            // set the owning side to null (unless already changed)
            if ($lieus->getPersonnel() === $this) {
                $lieus->setPersonnel(null);
            }
        }

        return $this;
    }
}
