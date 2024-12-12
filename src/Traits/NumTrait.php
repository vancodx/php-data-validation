<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait NumTrait
{
    public static function isNum(mixed $value): bool
    {
        return static::isInt($value) || static::isFloat($value);
    }

    public static function isUNum(mixed $value): bool
    {
        return static::isUInt($value) || static::isUFloat($value);
    }

    public static function isPosNum(mixed $value): bool
    {
        return static::isPosInt($value) || static::isPosFloat($value);
    }

    public static function isNegNum(mixed $value): bool
    {
        return static::isNegInt($value) || static::isNegFloat($value);
    }
}
