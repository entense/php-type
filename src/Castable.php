<?php

declare(strict_types=1);

namespace Entense\Type;

interface Castable
{
    public function cast(mixed $value): mixed;
}
