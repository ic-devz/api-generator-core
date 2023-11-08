<?php

namespace ApiGenerator\Core\Domain;

class Endpoint
{
    public function __construct(
        public readonly string $id,
        public readonly string $uri,
        public readonly string $method,
        public readonly string $security,
        public readonly ?Schema $request = null,
        public readonly ?Schema $response = null
    ) {
    }

    public function hasChanges(Endpoint $endpoint): bool
    {
        return $this->uri !== $endpoint->uri
            || $this->method !== $endpoint->method
            || $this->security !== $endpoint->security
            || !$this->request->hasChanges($endpoint->request)
            || !$this->response->hasChanges($endpoint->response);
    }
}