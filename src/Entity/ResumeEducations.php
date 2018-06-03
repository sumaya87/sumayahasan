<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResumeEducationsRepository")
 */
class ResumeEducations
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="institute_name", type="string", length=255)
     */
    private $institute;

    /**
     * @ORM\Column(name="degree_name", type="string", length=255)
     */
    private $degreeName;

    /**
     * @ORM\Column(name="specialization", type="string", length=255, nullable=true)
     */
    private $specialization;

    /**
     * @ORM\Column(name="result", type="string", length=255)
     */
    private $result;

    /**
     * @ORM\Column(name="started_on", type="date", nullable=true)
     */
    private $courseStartedAt;

    /**
     * @ORM\Column(name="ended_on", type="date", nullable=true)
     */
    private $courseEndedAt;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function getInstitute(): ?string
    {
        return $this->institute;
    }

    public function setInstitute(string $institute): self
    {
        $this->institute = $institute;

        return $this;
    }

    public function getDegreeName(): ?string
    {
        return $this->degreeName;
    }

    public function setDegreeName(string $degreeName): self
    {
        $this->degreeName = $degreeName;

        return $this;
    }

    public function getSpecialization(): ?string
    {
        return $this->specialization;
    }

    public function setSpecialization(string $specialization): self
    {
        $this->specialization = $specialization;

        return $this;
    }

    public function getResult(): ?string
    {
        return $this->result;
    }

    public function setResult(string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getCourseStartedAt(): ?\DateTime
    {
        return $this->courseStartedAt;
    }

    public function setCourseStatedAt(\DateTime $courseStartedAt): self
    {
        $this->courseStartedAt = $courseStartedAt;

        return $this;
    }

    public function getCourseEndedAt(): ?\DateTime
    {
        return $this->courseEndedAt;
    }

    public function setCourseEndedAt(\DateTime $courseEndedAt): self
    {
        $this->courseEndedAt = $courseEndedAt;

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

    public function getCourseDuration()
    {
        $startedAt = date('Y', strtotime($this->getCourseStartedAt()->format('Y-m-d')));

        $endedAt = date('Y', strtotime($this->getCourseEndedAt()->format('Y-m-d')));

        return $startedAt.' - '.$endedAt;
    }
}
