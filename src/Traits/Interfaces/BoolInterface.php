<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits\Interfaces;

interface BoolInterface
{
    public static function isBool(mixed $value): bool;
}
