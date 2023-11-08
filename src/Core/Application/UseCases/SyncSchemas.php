<?php

namespace ApiGenerator\Core\Application\UseCases;

use ApiGenerator\Core\Domain\SchemaGeneratorStrategy;
use ApiGenerator\Core\Domain\SchemaRepository;
use ApiGenerator\Core\Domain\Schemas;

class SyncSchemas
{
    public function __construct(
        private readonly SchemaGeneratorStrategy $schemaGeneratorStrategy,
        private readonly SchemaRepository $repository
    ) {
    }

    public function sync(): Schemas
    {
        $schemas = $this->schemaGeneratorStrategy->generate();
        $storedSchemas = $this->repository->all();

        foreach ($schemas->getSchemas() as $schema) {
            $storedSchema = $storedSchemas->findBySlug($schema->slug);

            if ($storedSchema === null) {
                $this->repository->create($schema);
            } elseif ($storedSchema->hasChanges($schema)) {
                $this->repository->update($schema->id, $schema);
            }
        }

        return $schemas;
    }
}