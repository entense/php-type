<?php

declare(strict_types=1);

namespace Entense\Type;

final class NullType extends Type implements Defaultable
{
    public function getDefaultValue(): mixed
    {
        return null;
    }

    public function isBuiltIn(): bool
    {
        return true;
    }

    public function __toString(): string
    {
        return 'null';
    }
}
