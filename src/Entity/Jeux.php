<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JeuxRepository")
 */
class Jeux
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
    private $name;

    /**
     * @ORM\Column(type="boolean")
     */
    private $nintendo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $playstation;

    /**
     * @ORM\Column(type="boolean")
     */
    private $xbox;

    /**
     * @ORM\Column(type="boolean")
     */
    private $pc;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getNintendo(): ?bool
    {
        return $this->nintendo;
    }

    public function setNintendo(bool $nintendo): self
    {
        $this->nintendo = $nintendo;

        return $this;
    }

    public function getPlaystation(): ?bool
    {
        return $this->playstation;
    }

    public function setPlaystation(bool $playstation): self
    {
        $this->playstation = $playstation;

        return $this;
    }

    public function getXbox(): ?bool
    {
        return $this->xbox;
    }

    public function setXbox(bool $xbox): self
    {
        $this->xbox = $xbox;

        return $this;
    }

    public function getPc(): ?bool
    {
        return $this->pc;
    }

    public function setPc(bool $pc): self
    {
        $this->pc = $pc;

        return $this;
    }
}
