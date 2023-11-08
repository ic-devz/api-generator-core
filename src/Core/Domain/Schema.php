<?php

namespace ApiGenerator\Core\Domain;

class Schema
{
    public function __construct(
        public string $id,
        public string $name,
        public string $slug,
        public array $data,
        public SchemaType $type
    ) {
    }

    public function hasChanges(?Schema $request): bool
    {
        if ($request === null) {
            return true;
        }

        return $this->name !== $request->name
            || $this->type !== $request->type
            || $this->data !== $request->data;
    }
}