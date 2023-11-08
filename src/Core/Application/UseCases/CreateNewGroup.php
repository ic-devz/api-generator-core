<?php

namespace ApiGenerator\Core\Application\UseCases;

use ApiGenerator\Core\Domain\Group;
use ApiGenerator\Core\Domain\GroupRepository;

class CreateNewGroup
{
    public function __construct(
        private readonly GroupRepository $repository
    ) {
    }

    /**
     * @param Group $group
     * @return Group
     * @throws \Exception
     */
    public function __invoke(Group $group): Group
    {
        $myGroup = $this->repository->findBySlug($group->slug);
        if ($myGroup) {
            throw new \Exception("Group with slug {$group->slug} already exists.");
        }

        return $this->repository->store($group);
    }
}