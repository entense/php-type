<?php

declare(strict_types=1);

namespace Entense\Type;

final class BoolType extends ScalarType implements Defaultable, Castable
{
    public function isAssignable(Type $other): bool
    {
        return $other instanceof $this || $other instanceof FalseType;
    }

    public function cast(mixed $value): bool
    {
        return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }

    public function getDefaultValue(): bool
    {
        return false;
    }

    public function isBuiltIn(): bool
    {
        return true;
    }

    public function __toString(): string
    {
        return 'bool';
    }
}
