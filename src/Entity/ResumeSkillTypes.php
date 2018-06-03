<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResumeSkillTypesRepository")
 */
class ResumeSkillTypes
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
    private $skillTypeName;

    /**
     * @ORM\Column(name="is_inline_list", type="boolean")
     */
    private $isInlineList;

    /**
     * @ORM\Column(name="display_order", type="integer")
     */
    private $displayOrder;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function getSkillTypeName(): ?string
    {
        return $this->skillTypeName;
    }

    public function SetSkillTypeName(string $skillTypeName): self
    {
        $this->skillTypeName = $skillTypeName;

        return $this;
    }

    public function getInlineListStyle(): ?bool
    {
        return $this->isInlineList;
    }

    public function setDisplayStyleStyle(bool $isInlineList): self
    {
        $this->isInlineList = $isInlineList;

        return $this;
    }

    public function getDisplayOrder(): ?int
    {
        return $this->displayOrder;
    }

    public function setDisplayOrder(int $displayOrder): self
    {
        $this->displayOrder = $displayOrder;

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
