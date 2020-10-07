<?php

namespace App\Entity;

use App\Repository\EmissionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmissionRepository::class)
 */
class Emission
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
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Contenu;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Image;

    /**
     * @ORM\ManyToOne(targetEntity=Chaine::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Chaine;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getChaine(): ?Chaine
    {
        return $this->Chaine;
    }

    public function setChaine(?Chaine $Chaine): self
    {
        $this->Chaine = $Chaine;

        return $this;
    }
}
