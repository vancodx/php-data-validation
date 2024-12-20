<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ValueOrNull;

trait IntOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true int|null $value
     */
    public static function isIntOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isInt($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isUIntOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isUInt($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isPosIntOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isPosInt($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isNegIntOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isNegInt($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isIntIdOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isIntId($value);
    }
}
