<?php

namespace App\Entity;

use App\Repository\ChaineRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ChaineRepository::class)
 */
class Chaine
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Logo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Baseline;

    /**
     * @ORM\Column(type="text")
     */
    private $Description;

    /**
     * @ORM\ManyToOne(targetEntity=TypeDeChaine::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getLogo(): ?string
    {
        return $this->Logo;
    }

    public function setLogo(string $Logo): self
    {
        $this->Logo = $Logo;

        return $this;
    }

    public function getBaseline(): ?string
    {
        return $this->Baseline;
    }

    public function setBaseline(string $Baseline): self
    {
        $this->Baseline = $Baseline;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getType(): ?TypeDeChaine
    {
        return $this->Type;
    }

    public function setType(?TypeDeChaine $Type): self
    {
        $this->Type = $Type;

        return $this;
    }
}
