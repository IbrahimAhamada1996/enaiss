<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PersonnelRepository")
 * @ORM\Table(name="enaiss_personnels")
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Statue", inversedBy="personnels")
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\LieuTravail", inversedBy="personnels")
     */
    private $lieu;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\DeclarationNaiss", inversedBy="personnels")
     */
    private $declaration;


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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getStatus(): ?Statue
    {
        return $this->status;
    }

    public function setStatus(?Statue $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getLieu(): ?LieuTravail
    {
        return $this->lieu;
    }

    public function setLieu(?LieuTravail $lieu): self
    {
        $this->lieu = $lieu;

        return $this;
    }

    public function getDeclaration(): ?DeclarationNaiss
    {
        return $this->declaration;
    }

    public function setDeclaration(?DeclarationNaiss $declaration): self
    {
        $this->declaration = $declaration;

        return $this;
    }

}
