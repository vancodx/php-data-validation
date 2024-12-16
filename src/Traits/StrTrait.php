<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait StrTrait
{
    /**
     * @param mixed $value
     * @return bool
     */
    public static function isStr(mixed $value): bool
    {
        return is_string($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isStrLen(mixed $value): bool
    {
        return static::isStr($value) && strlen($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isEmptyStr(mixed $value): bool
    {
        return static::isStr($value) && !strlen($value);
    }
}
