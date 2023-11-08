<?php

namespace ApiGenerator\Test\Unit\Endpoint;

use ApiGenerator\Core\Domain\Endpoint;
use ApiGenerator\Core\Domain\EndpointRepository;
use ApiGenerator\Core\Domain\Endpoints;

class MockEndpointRepository implements EndpointRepository
{
    public function all(): Endpoints
    {
        return new Endpoints([]);
    }

    public function findById(int $id): ?Endpoint
    {
        return null;
    }

    public function store(Endpoint $endpoint): Endpoint
    {
        return $endpoint;
    }

    public function update(int $endpointId, Endpoint $endpoint): Endpoint
    {
        return $endpoint;
    }

    public function delete(int $endpointId): bool
    {
        return true;
    }
}