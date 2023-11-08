<?php

namespace ApiGenerator\Test\Unit\Endpoint;

use ApiGenerator\Core\Domain\Endpoint;
use ApiGenerator\Core\Domain\EndpointGeneratorStrategy;
use ApiGenerator\Core\Domain\Endpoints;

class MockEndpointGeneratorStrategy implements EndpointGeneratorStrategy
{

    public function generate(): Endpoints
    {
        $endpoints = new Endpoints();
        $endpoints->addEndpoint(
            new Endpoint(
                "1",
                '/api/v1/users',
                'GET',
                'public',
            )
        );

        return $endpoints;
    }
}