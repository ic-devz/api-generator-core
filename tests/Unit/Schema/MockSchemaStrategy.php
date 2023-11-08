<?php

namespace ApiGenerator\Test\Unit\Schema;

use ApiGenerator\Core\Domain\Schema;
use ApiGenerator\Core\Domain\SchemaGeneratorStrategy;
use ApiGenerator\Core\Domain\Schemas;
use ApiGenerator\Core\Domain\SchemaType;

class MockSchemaStrategy implements SchemaGeneratorStrategy
{
    public function generate(): Schemas
    {
        $schemas = new Schemas();
        $schemas->addSchema(
            new Schema(
                "1",
                "Persona",
                "persona",
                [
                    "firstName" => "string",
                    "lastName" => "string",
                    "age" => "int",
                    "address" => [
                        "street" => "string",
                        "number" => "int",
                        "city" => "string",
                        "country" => "string"
                    ]
                ],
                SchemaType::REQUEST
            )
        );

        return $schemas;
    }
}