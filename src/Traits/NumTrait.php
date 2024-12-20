<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait NumTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true int|float $value
     */
    public static function isNum(mixed $value): bool
    {
        return static::isInt($value) || static::isFloat($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isUNum(mixed $value): bool
    {
        return static::isUInt($value) || static::isUFloat($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isPosNum(mixed $value): bool
    {
        return static::isPosInt($value) || static::isPosFloat($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isNegNum(mixed $value): bool
    {
        return static::isNegInt($value) || static::isNegFloat($value);
    }
}
