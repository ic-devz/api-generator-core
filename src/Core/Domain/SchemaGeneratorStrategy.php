<?php

namespace ApiGenerator\Core\Domain;

interface SchemaGeneratorStrategy
{
    public function generate(): Schemas;
}