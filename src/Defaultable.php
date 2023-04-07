<?php

declare(strict_types=1);

namespace Entense\Type;

interface Defaultable
{
    public function getDefaultValue(): mixed;
}
