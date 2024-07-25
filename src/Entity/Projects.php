<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\DBAL\Types\Types;

#[ORM\Entity(repositoryClass: ProjectRepository::class), ORM\Table(name: "`Projects`")]
class Projects
{
    #[ORM\Id]
    #[ORM\Column(name: "`ProjectId`", type: Types::BIGINT)]
    private $ProjectId = null;

    #[ORM\Column(name: "`ProjectName`", length: 200)]
    private $ProjectName = null;

    #[ORM\Column(name: "`ProjectLocation`", length: 500)]
    private $ProjectLocation = null;

    #[ORM\Column(name: "`ProjectStage`", length: 500)]
    private $ProjectStage = null;

    #[ORM\Column(name: "`ProjectStartDate`", type: Types::STRING)]
    private $ProjectStartDate = null;

    #[ORM\Column(name: "`ProjectDetails`", length: 2000)]
    private $ProjectDetails = null;

    #[ORM\Column(name: "`ProjectCreatorId`", type: Types::BIGINT)]
    private $ProjectCreatorId = null;

    public function getProjectId(): ?int
    {
        return $this->ProjectId;
    }

    public function setProjectId(string $ProjectId)
    {
        $this->ProjectId = $ProjectId;

        return $this;
    }

    public function getProjectName(): ?string
    {
        return $this->ProjectName;
    }

    public function setProjectName(string $ProjectName)
    {
        $this->ProjectName = $ProjectName;

        return $this;
    }

    public function getProjectLocation()
    {
        return $this->ProjectLocation;
    }

    public function setProjectLocation(string $ProjectLocation)
    {
        $this->ProjectLocation = $ProjectLocation;

        return $this;
    }

    public function getProjectStage()
    {
        return $this->ProjectStage;
    }

    public function setProjectStage(string $ProjectStage)
    {
        $this->ProjectStage = $ProjectStage;

        return $this;
    }

    public function getProjectStartDate()
    {
        return $this->ProjectStartDate;
    }

    public function setProjectStartDate(string $ProjectStartDate)
    {
        $this->ProjectStartDate = $ProjectStartDate;

        return $this;
    }

    public function getProjectDetails()
    {
        return $this->ProjectDetails;
    }

    public function setProjectDetails(string $ProjectDetails)
    {
        $this->ProjectDetails = $ProjectDetails;

        return $this;
    }

    public function getProjectCreatorId()
    {
        return $this->ProjectCreatorId;
    }

    public function setProjectCreatorId(string $ProjectCreatorId)
    {
        $this->ProjectCreatorId = $ProjectCreatorId;

        return $this;
    }
}
