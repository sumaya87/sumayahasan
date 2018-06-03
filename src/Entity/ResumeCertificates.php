<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResumeCertificatesRepository")
 */
class ResumeCertificates
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
    private $certificationName;

    /**
     * @ORM\Column(name="authority", type="string", length=255, nullable=true)
     */
    private $authorityName;

    /**
     * @ORM\Column(name="licence_number", type="string", length=255, nullable=true)
     */
    private $licenceNumber;

    /**
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $certificateURL;

    /**
     * @ORM\Column(name="received_on", type="date")
     */
    private $certificationReceivedAt;

    /**
     * @ORM\Column(name="expires_on", type="date", nullable=true)
     */
    private $certificationExpiresAt;

    /**
     * @ORM\Column(name="status", type="boolean")
     */
    private $status;

    public function getId()
    {
        return $this->id;
    }

    public function getCertificationName(): ?string
    {
        return $this->certificationName;
    }

    public function setCertificationName(string $certificationName): self
    {
        $this->certificationName = $certificationName;

        return $this;
    }

    public function getAuthorityName(): ?string
    {
        return $this->authorityName;
    }

    public function setAuthority(string $authorityName): self
    {
        $this->authorityName = $authorityName;

        return $this;
    }

    public function getLicenceNumber(): ?string
    {
        return $this->licenceNumber;
    }

    public function setLicenceNo(string $licenceNumber): self
    {
        $this->licenceNumber = $licenceNumber;

        return $this;
    }

    public function getCertificateURL(): ?string
    {
        return $this->certificateURL;
    }

    public function setCertificateURL(string $certificateURL): self
    {
        $this->certificateURL = $certificateURL;

        return $this;
    }

    public function getCertificationReceivedAt(): ?\DateTime
    {
        return $this->certificationReceivedAt;
    }

    public function setCertificationReceivedAt(\DateTime $certificationReceivedAt): self
    {
        $this->certificationReceivedAt = $certificationReceivedAt;

        return $this;
    }

    public function getCertificationExpiresAt(): ?\DateTime
    {
        return $this->certificationExpiresAt;
    }

    public function setExpiresAt(\DateTime $certificationExpiresAt): self
    {
        $this->certificationExpiresAt = $certificationExpiresAt;

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

    public function getCertificationValidityPeriod()
    {
        $startedAt = date('M Y', strtotime($this->getCertificationReceivedAt()->format('Y-m-d')));

        if(!empty($this->getCertificationExpiresAt())){
            $endedAt = date('M Y', strtotime($this->getCertificationExpiresAt()->format('Y-m-d')));
        }
        else{
            $endedAt = 'Present';
        }

        return $startedAt.' - '.$endedAt;
    }
}
