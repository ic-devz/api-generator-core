<?php

namespace ApiGenerator\Core\Application\UseCases;

use ApiGenerator\Core\Domain\EndpointGeneratorStrategy;
use ApiGenerator\Core\Domain\EndpointRepository;
use ApiGenerator\Core\Domain\Endpoints;

class SyncEndpoints
{
    public function __construct(
        private readonly EndpointGeneratorStrategy $endpointGeneratorStrategy,
        private readonly EndpointRepository $repository
    ) {
    }

    public function sync(): Endpoints
    {
        $endpoints = $this->endpointGeneratorStrategy->generate();
        $storedEndpoints = $this->repository->all();

        foreach ($endpoints->getEndpoints() as $endpoint) {
            $storedEndpoint = $storedEndpoints->findByUri($endpoint->uri);

            if ($storedEndpoint === null) {
                $this->repository->store($endpoint);
            } elseif ($storedEndpoint->hasChanges($endpoint)) {
                $this->repository->update($endpoint->id, $endpoint);
            }
        }

        return $endpoints;
    }
}