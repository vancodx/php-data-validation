<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ValueOrNull;

trait NumOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true int|float|null $value
     */
    public static function isNumOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isNum($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isUNumOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isUNum($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isPosNumOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isPosNum($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isNegNumOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isNegNum($value);
    }
}
