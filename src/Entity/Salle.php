<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SalleRepository::class)]
class Salle
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    private ?string $nom = null;

    #[ORM\Column]
    private ?int $capacite = null;

    #[ORM\Column(length: 255)]
    private ?string $equipement = null;

    #[ORM\Column]
    private ?bool $disponibilite_reservation = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    private ?\DateTimeInterface $duree_reservation = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getCapacite(): ?int
    {
        return $this->capacite;
    }

    public function setCapacite(int $capacite): static
    {
        $this->capacite = $capacite;

        return $this;
    }

    public function getEquipement(): ?string
    {
        return $this->equipement;
    }

    public function setEquipement(string $equipement): static
    {
        $this->equipement = $equipement;

        return $this;
    }

    public function isDisponibiliteReservation(): ?bool
    {
        return $this->disponibilite_reservation;
    }

    public function setDisponibiliteReservation(bool $disponibilite_reservation): static
    {
        $this->disponibilite_reservation = $disponibilite_reservation;

        return $this;
    }

    public function getDureeReservation(): ?\DateTimeInterface
    {
        return $this->duree_reservation;
    }

    public function setDureeReservation(\DateTimeInterface $duree_reservation): static
    {
        $this->duree_reservation = $duree_reservation;

        return $this;
    }
}
