<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResumeTestScoresRepository")
 */
class ResumeTestScores
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
    private $testName;

    /**
     * @ORM\Column(name="score", type="string", length=255)
     */
    private $score;

    /**
     * @ORM\Column(name="passed_on", type="date")
     */
    private $passedAt;

    /**
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $testResultURL;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function getTestName(): ?string
    {
        return $this->testName;
    }

    public function setTestName(string $testName): self
    {
        $this->testName = $testName;

        return $this;
    }

    public function getScore(): ?string
    {
        return $this->score;
    }

    public function setScore(string $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function getPassedAt(): ?string
    {
        return date('M Y', strtotime($this->passedAt->format('Y-m-d')));
    }

    public function setPassedAt(\DateTime $passedAt): self
    {
        $this->passedAt = $passedAt;

        return $this;
    }

    public function getTestResultURL(): ?string
    {
        return $this->testResultURL;
    }

    public function setTestResultURL(string $testResultURL): self
    {
        $this->testResultURL = $testResultURL;

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
