<?php

declare(strict_types=1);

namespace Entense\Type;

use Carbon\Carbon;
use DateTimeInterface;

final class DateType extends Type implements Castable
{
    public function cast(mixed $value): DateTimeInterface
    {
        if (is_numeric($value)) {
            $date = Carbon::createFromTimestamp($value);
        } else {
            $date = Carbon::parse($value);
        }

        return $date->toDateTime();
    }

    public function isBuiltIn(): bool
    {
        return true;
    }

    public function __toString(): string
    {
        return 'datetime';
    }
}
