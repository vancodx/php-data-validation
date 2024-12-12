<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait FloatTrait
{
    public static function isFloat(mixed $value): bool
    {
        return is_float($value);
    }

    public static function isUFloat(mixed $value): bool
    {
        return static::isFloat($value) && ($value >= 0.0);
    }

    public static function isPosFloat(mixed $value): bool
    {
        return static::isFloat($value) && ($value > 0.0);
    }

    public static function isNegFloat(mixed $value): bool
    {
        return static::isFloat($value) && ($value < 0.0);
    }
}
