<?php

declare(strict_types=1);

namespace Entense\Type;

use DateTimeZone;

final class DateTimeZoneType extends Type implements Castable
{
    public function cast(mixed $value): DateTimeZone
    {
        return new DateTimeZone(str_replace('UTC', '', $value));
    }

    public function isBuiltIn(): bool
    {
        return true;
    }

    public function __toString(): string
    {
        return 'datetimezone';
    }
}
