<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResumeSkillsRepository")
 */
class ResumeSkills
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $skillName;

    /**
     * @ORM\Column(name="devicon_name", type="string", length=255, nullable=false)
     */
    private $deviconName;

    /**
     * @ORM\ManyToOne(targetEntity="ResumeSkillTypes")
     * @ORM\JoinColumn(name="type_id", referencedColumnName="id", nullable=false)
     */
    private $type;

    /**
     * @ORM\Column(name="display_order", type="integer")
     */
    private $skillDisplayOrder;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function getSkillName(): ?string
    {
        return $this->skillName;
    }

    public function setSkillName(string $skillName): self
    {
        $this->skillName = $skillName;

        return $this;
    }

    public function getDeviconName(): ?string
    {
        return 'devicon-'.$this->deviconName;
    }

    public function setDeviconName(string $deviconName): self
    {
        $this->deviconName = $deviconName;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSkillDisplayOrder()
    {
        return $this->skillDisplayOrder;
    }

    public function setSkillDisplayOrder($skillDisplayOrder): self
    {
        $this->skillDisplayOrder = $skillDisplayOrder;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }
}
