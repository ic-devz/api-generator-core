<?php

namespace ApiGenerator\Test\Unit\Endpoint;

use ApiGenerator\Core\Application\UseCases\SyncEndpoints;
use ApiGenerator\Core\Domain\Endpoints;
use PHPUnit\Framework\TestCase;

class SyncSchemaTest extends TestCase
{
    public function testSyncSchema()
    {
        $syncEndpoints = new SyncEndpoints(new MockEndpointGeneratorStrategy(), new MockEndpointRepository());
        $endpoints = $syncEndpoints->sync();

        $this->assertInstanceOf(Endpoints::class, $endpoints);
        $this->assertNotEmpty($endpoints->getEndpoints());
    }
}