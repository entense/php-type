<?php

declare(strict_types=1);

namespace Entense\Type;

use BackedEnum;

final class EnumType extends Type implements Castable
{
    public function cast(mixed $value): BackedEnum
    {
        $type = $value->getType()->getName();

        if (is_a($type, BackedEnum::class, true)) {
            return $type::from($value->value);
        }
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
        return 'enum';
    }
}
