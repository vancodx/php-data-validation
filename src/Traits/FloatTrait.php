<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait FloatTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true float $value
     */
    public static function isFloat(mixed $value): bool
    {
        return is_float($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isUFloat(mixed $value): bool
    {
        return static::isFloat($value) && ($value >= 0.0);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isPosFloat(mixed $value): bool
    {
        return static::isFloat($value) && ($value > 0.0);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isNegFloat(mixed $value): bool
    {
        return static::isFloat($value) && ($value < 0.0);
    }
}
