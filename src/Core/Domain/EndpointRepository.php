<?php

namespace ApiGenerator\Core\Domain;

interface EndpointRepository
{
    public function all(): Endpoints;

    public function findById(int $id): ?Endpoint;

    public function store(Endpoint $endpoint): Endpoint;

    public function update(int $endpointId, Endpoint $endpoint): Endpoint;

    public function delete(int $endpointId): bool;
}