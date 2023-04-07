<?php

declare(strict_types=1);

namespace Entense\Type;

final class ParentType extends ObjectType
{
    public function __construct(string $name = 'parent')
    {
        parent::__construct($name);
    }
}
