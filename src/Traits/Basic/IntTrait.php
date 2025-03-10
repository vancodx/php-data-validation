<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\Basic;

trait IntTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true int $value
     */
    public static function isInt(mixed $value): bool
    {
        return is_int($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-negative-int $value
     */
    public static function isUInt(mixed $value): bool
    {
        return static::isInt($value) && ($value >= 0);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true positive-int $value
     */
    public static function isPosInt(mixed $value): bool
    {
        return static::isInt($value) && ($value > 0);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true negative-int $value
     */
    public static function isNegInt(mixed $value): bool
    {
        return static::isInt($value) && ($value < 0);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true positive-int $value
     */
    public static function isIntId(mixed $value): bool
    {
        return static::isPosInt($value);
    }
}
