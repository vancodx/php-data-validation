<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait IntTrait
{
    public static function isInt(mixed $value): bool
    {
        return is_int($value);
    }

    public static function isUInt(mixed $value): bool
    {
        return static::isInt($value) && ($value >= 0);
    }

    public static function isPosInt(mixed $value): bool
    {
        return static::isInt($value) && ($value > 0);
    }

    public static function isNegInt(mixed $value): bool
    {
        return static::isInt($value) && ($value < 0);
    }

    public static function isIntId(mixed $value): bool
    {
        return static::isPosInt($value);
    }
}
