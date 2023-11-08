<?php

namespace ApiGenerator\Test\Unit\Schema;

use ApiGenerator\Core\Domain\Schema;
use ApiGenerator\Core\Domain\SchemaRepository;
use ApiGenerator\Core\Domain\Schemas;

class MockSchemaRepository implements SchemaRepository
{
    public function all(): Schemas
    {
        return new Schemas([]);
    }

    public function findById(int $schemaId): ?Schema
    {
        return null;
    }

    public function create(Schema $schema): Schema
    {
        return $schema;
    }

    public function update(int $schemaId, Schema $schema): Schema
    {
        return $schema;
    }

    public function delete(int $schemaId): bool
    {
        return true;
    }
}