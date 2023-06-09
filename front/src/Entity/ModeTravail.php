<?php

namespace App\Entity;

use App\Repository\ModeTravailRepository;
use App\Traits\EntityOptions;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass:ModeTravailRepository::class)]
class ModeTravail
{
    use EntityOptions;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type:"integer")]
    private ?int $id;

    #[ORM\Column(type: "string", length: 50)]
    private ?string $nom;

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
}
