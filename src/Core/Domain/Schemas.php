<?php

namespace ApiGenerator\Core\Domain;

class Schemas
{
    private array $schemas = [];
    private array $schemasBySlug = [];

    public function __construct(
        array $schemas = []
    ) {
        foreach ($schemas as $schema) {
            $this->addSchema($schema);
        }
    }

    public function addSchema(Schema $schema): void
    {
        $this->schemas[] = $schema;
        $this->schemasBySlug[$schema->slug] = $schema;
    }

    /**
     * @return array<Schema>
     */
    public function getSchemas(): array
    {
        return $this->schemas;
    }

    public function findBySlug(string $slug): ?Schema
    {
        return $this->schemasBySlug[$slug] ?? null;
    }
}