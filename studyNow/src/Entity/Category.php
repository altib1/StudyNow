<?php

namespace App\Entity;

use App\Repository\CategoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategoryRepository::class)
 */
class Category
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
     * @ORM\OneToMany(targetEntity=SubCategory::class, mappedBy="category")
     */
    private $subcategory;

    /**
     * @ORM\OneToMany(targetEntity=Tutorial::class, mappedBy="lecategory")
     */
    private $letutorial;

    public function __construct()
    {
        $this->subcategory = new ArrayCollection();
        $this->letutorial = new ArrayCollection();
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

    public function getTutorial(): ?Tutorial
    {
        return $this->tutorial;
    }

    public function setTutorial(Tutorial $tutorial): self
    {
        // set the owning side of the relation if necessary
        if ($tutorial->getCategory() !== $this) {
            $tutorial->setCategory($this);
        }

        $this->tutorial = $tutorial;

        return $this;
    }

    /**
     * @return Collection|SubCategory[]
     */
    public function getSubcategory(): Collection
    {
        return $this->subcategory;
    }

    public function addSubcategory(SubCategory $subcategory): self
    {
        if (!$this->subcategory->contains($subcategory)) {
            $this->subcategory[] = $subcategory;
            $subcategory->setCategory($this);
        }

        return $this;
    }

    public function removeSubcategory(SubCategory $subcategory): self
    {
        if ($this->subcategory->removeElement($subcategory)) {
            // set the owning side to null (unless already changed)
            if ($subcategory->getCategory() === $this) {
                $subcategory->setCategory(null);
            }
        }

        return $this;
    }

    public function __toString() {
        return $this->name;
    }

    /**
     * @return Collection|Tutorial[]
     */
    public function getLetutorial(): Collection
    {
        return $this->letutorial;
    }

    public function addLetutorial(Tutorial $letutorial): self
    {
        if (!$this->letutorial->contains($letutorial)) {
            $this->letutorial[] = $letutorial;
            $letutorial->setLecategory($this);
        }

        return $this;
    }

    public function removeLetutorial(Tutorial $letutorial): self
    {
        if ($this->letutorial->removeElement($letutorial)) {
            // set the owning side to null (unless already changed)
            if ($letutorial->getLecategory() === $this) {
                $letutorial->setLecategory(null);
            }
        }

        return $this;
    }
}
