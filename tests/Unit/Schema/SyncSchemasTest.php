<?php

namespace ApiGenerator\Test\Unit\Schema;

use ApiGenerator\Core\Application\UseCases\SyncSchemas;
use ApiGenerator\Core\Domain\Schemas;
use PHPUnit\Framework\TestCase;

class SyncSchemasTest extends TestCase
{
    public function testSyncSchemas()
    {
        $syncSchemas = new SyncSchemas(new MockSchemaStrategy(), new MockSchemaRepository());
        $schemas = $syncSchemas->sync();

        $this->assertInstanceOf(Schemas::class, $schemas);
        $this->assertNotEmpty($schemas->getSchemas());
    }
}