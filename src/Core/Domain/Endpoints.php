<?php

namespace ApiGenerator\Core\Domain;

class Endpoints
{
    private array $endpoints = [];
    private array $endpointsByUri = [];

    public function __construct(
        array $endpoints = []
    ) {
        foreach ($endpoints as $endpoint) {
            $this->addEndpoint($endpoint);
        }
    }

    public function addEndpoint(Endpoint $endpoint): void
    {
        $this->endpoints[] = $endpoint;
        $this->endpointsByUri[$endpoint->uri] = $endpoint;
    }

    /**
     * @return array<Endpoint>
     */
    public function getEndpoints(): array
    {
        return $this->endpoints;
    }

    public function findByUri(string $uri): ?Endpoint
    {
        return $this->endpointsByUri[$uri] ?? null;
    }
}