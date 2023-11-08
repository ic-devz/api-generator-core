<?php

namespace ApiGenerator\Core\Domain;

interface SchemaRepository
{
    /**
     * @return Schemas
     */
    public function all(): Schemas;

    public function findById(int $schemaId): ?Schema;

    public function create(Schema $schema): Schema;

    public function update(int $schemaId, Schema $schema): Schema;

    public function delete(int $schemaId): bool;
}