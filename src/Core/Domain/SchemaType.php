<?php

namespace ApiGenerator\Core\Domain;

enum SchemaType: string
{
    case RESPONSE = 'response';
    case REQUEST = 'request';
}