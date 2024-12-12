<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait MiscTrait
{
    public static function isNull(mixed $value): bool
    {
        return is_null($value);
    }

    public static function isTrue(mixed $value): bool
    {
        return ($value === true);
    }

    public static function isFalse(mixed $value): bool
    {
        return ($value === false);
    }
}
