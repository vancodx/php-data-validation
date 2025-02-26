<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\OrNull;

trait FloatOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true float|null $value
     */
    public static function isFloatOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isFloat($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true float|null $value
     */
    public static function isUFloatOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isUFloat($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true float|null $value
     */
    public static function isPosFloatOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isPosFloat($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true float|null $value
     */
    public static function isNegFloatOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isNegFloat($value);
    }
}
