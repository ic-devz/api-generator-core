<?php

namespace ApiGenerator\Core\Domain;

interface ProjectRepository
{
    /**
     * @return Project[]
     */
    public function all(): array;

    public function findById(int $id): ?Project;

    public function findBySlug(string $slug): ?Project;

    public function store(Project $project): Project;

    public function update(int $projectId, Project $project): void;

    public function delete(int $projectId): void;
}