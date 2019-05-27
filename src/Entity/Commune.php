<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CommuneRepository")
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
     * @ORM\ManyToOne(targetEntity="App\Entity\LieuTravail", inversedBy="idcom")
     */
    private $lieuTravail;

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

    public function getLieuTravail(): ?LieuTravail
    {
        return $this->lieuTravail;
    }

    public function setLieuTravail(?LieuTravail $lieuTravail): self
    {
        $this->lieuTravail = $lieuTravail;

        return $this;
    }
}