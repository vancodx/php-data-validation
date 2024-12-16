<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait IntTrait
{
    /**
     * @param mixed $value
     * @return bool
     */
    public static function isInt(mixed $value): bool
    {
        return is_int($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isUInt(mixed $value): bool
    {
        return static::isInt($value) && ($value >= 0);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isPosInt(mixed $value): bool
    {
        return static::isInt($value) && ($value > 0);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isNegInt(mixed $value): bool
    {
        return static::isInt($value) && ($value < 0);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isIntId(mixed $value): bool
    {
        return static::isPosInt($value);
    }
}
