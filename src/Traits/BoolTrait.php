<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits;

trait BoolTrait
{
    public static function isBool(mixed $value): bool
    {
        return is_bool($value);
    }
}
