<?php

namespace ApiGenerator\Core\Domain;

readonly class Project
{
    public function __construct(
        public int $id,
        public string $name,
        public string $slug,
        public string $description,
        public ?string $domain,
    ) {
    }
}