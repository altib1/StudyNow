<?php

namespace App\Entity;

use App\Repository\DificultyRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DificultyRepository::class)
 */
class Dificulty
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
    private $name;

    /**
     * @ORM\OneToMany(targetEntity=Tutorial::class, mappedBy="ledifficulty", orphanRemoval=true)
     */
    private $tutorial;

    public function __construct()
    {
        $this->tutorial = new ArrayCollection();
    }

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

    /**
     * @return Collection|Tutorial[]
     */
    public function getTutorial(): Collection
    {
        return $this->tutorial;
    }

    public function addTutorial(Tutorial $tutorial): self
    {
        if (!$this->tutorial->contains($tutorial)) {
            $this->tutorial[] = $tutorial;
            $tutorial->setLedifficulty($this);
        }

        return $this;
    }

    public function removeTutorial(Tutorial $tutorial): self
    {
        if ($this->tutorial->removeElement($tutorial)) {
            // set the owning side to null (unless already changed)
            if ($tutorial->getLedifficulty() === $this) {
                $tutorial->setLedifficulty(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->name;
    }
}
