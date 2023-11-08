<?php

namespace ApiGenerator\Core\Application\UseCases;

use ApiGenerator\Core\Domain\Project;
use ApiGenerator\Core\Domain\ProjectRepository;

class CreateNewProject
{
    public function __construct(
        private readonly ProjectRepository $projectRepository
    ) {
    }

    /**
     * @param Project $project
     * @return Project
     * @throws \Exception
     */
    public function __invoke(Project $project): Project
    {
        $myProject = $this->projectRepository->findBySlug($project->slug);

        if ($myProject) {
            throw new \Exception("Project already exists");
        }

        return $this->projectRepository->store($project);
    }
}