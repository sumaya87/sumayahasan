<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints\Date;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResumeExperiencesRepository")
 */
class ResumeExperiences
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id", type="integer")
     */
    private $id;

    /**
     * @ORM\Column(name="role_name", type="string", length=255, nullable=true)
     */
    private $role;

    /**
     * @ORM\Column(name="company_name", type="string", length=255, nullable=true)
     */
    private $companyName;

    /**
     * @ORM\Column(name="company_website", type="string", length=255, nullable=true)
     */
    private $companyWebsite;

    /**
     * @ORM\Column(name="job_description", type="text", nullable=true)
     */
    private $jobDescription;

    /**
     * @ORM\Column(name="started_on", type="date", nullable=true)
     */
    private $roleStartedAt;

    /**
     * @ORM\Column(name="ended_on", type="date", nullable=true)
     */
    private $roleEndedAt;

    /**
     * @ORM\Column(name="current_job", type="boolean")
     */
    private $currentlyWorking;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function getRoleName(): ?string
    {
        return $this->role;
    }

    public function setRoleName(?string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(?string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyWebsite()
    {
        return $this->companyWebsite;
    }

    public function setCompanyWebsite($companyWebsite): self
    {
        $this->companyWebsite = $companyWebsite;

        return $this;
    }

    public function getJobDescription(): ?string
    {
        return $this->jobDescription;
    }

    public function setJobDescription(?string $jobDescription): self
    {
        $this->jobDescription = $jobDescription;

        return $this;
    }

    public function getRoleStartedAt(): ?\DateTime
    {
        return $this->roleStartedAt;
    }

    public function setRoleStartedAt(Date $roleStartedAt): self
    {
        $this->roleStartedAt = $roleStartedAt;

        return $this;
    }

    public function getRoleEndedAt(): ?\DateTime
    {
        return $this->roleEndedAt;
    }

    public function setRoleEndedAt(Date $roleEndedAt): self
    {
        $this->roleEndedAt = $roleEndedAt;

        return $this;
    }

    public function getCurrentlyWorking(): ?bool
    {
        return $this->currentlyWorking;
    }

    public function setCurrentlyWorking(bool $currentlyWorking): self
    {
        $this->currentlyWorking = $currentlyWorking;

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

    public function getRoleDuration()
    {
        $startedAt = date('M Y', strtotime($this->getRoleStartedAt()->format('Y-m-d')));

        if(!$this->getCurrentlyWorking()){
            $endedAt = date('M Y', strtotime($this->getRoleEndedAt()->format('Y-m-d')));
        }
        else{
            $endedAt = 'Present';
        }

        return $startedAt.' - '.$endedAt;
    }
}
