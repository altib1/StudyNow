<?php

namespace App\Entity;

use App\Repository\TutorialRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TutorialRepository::class)
 */
class Tutorial
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="tutorial")
     */
    private $users;

    /**
     * @ORM\OneToMany(targetEntity=Steps::class, mappedBy="tutorial")
     */
    private $steps;


    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="letutorial")
     * @ORM\JoinColumn(nullable=false)
     */
    private $lecategory;

    /**
     * @ORM\ManyToOne(targetEntity=Dificulty::class, inversedBy="tutorial")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ledifficulty;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->steps = new ArrayCollection();
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


    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addTutorial($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeTutorial($this);
        }

        return $this;
    }

    /**
     * @return Collection|Steps[]
     */
    public function getSteps(): Collection
    {
        return $this->steps;
    }

    public function addStep(Steps $step): self
    {
        if (!$this->steps->contains($step)) {
            $this->steps[] = $step;
            $step->setTutorial($this);
        }

        return $this;
    }

    public function removeStep(Steps $step): self
    {
        if ($this->steps->removeElement($step)) {
            // set the owning side to null (unless already changed)
            if ($step->getTutorial() === $this) {
                $step->setTutorial(null);
            }
        }

        return $this;
    }


    public function getLecategory(): ?Category
    {
        return $this->lecategory;
    }

    public function setLecategory(?Category $lecategory): self
    {
        $this->lecategory = $lecategory;

        return $this;
    }

    public function getLedifficulty(): ?Dificulty
    {
        return $this->ledifficulty;
    }

    public function setLedifficulty(?Dificulty $ledifficulty): self
    {
        $this->ledifficulty = $ledifficulty;

        return $this;
    }
}
