<?php

namespace ApiGenerator\Core\Domain;

interface EndpointGeneratorStrategy
{
    public function generate(): Endpoints;
}