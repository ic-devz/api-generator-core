<?php

namespace ApiGenerator\Core\Domain;

interface GroupRepository
{
    /**
     * @return Group[]
     */
    public function all(): array;

    public function findBySlug(string $slug): ?Group;

    public function findById(int $id): Group;

    public function store(Group $group): Group;

    public function delete(int $groupId): void;

    public function update(int $groupId, Group $group): void;

}