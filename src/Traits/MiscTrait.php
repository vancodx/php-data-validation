<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait MiscTrait
{
    /**
     * @param mixed $value
     * @return bool
     */
    public static function isNull(mixed $value): bool
    {
        return is_null($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isTrue(mixed $value): bool
    {
        return ($value === true);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isFalse(mixed $value): bool
    {
        return ($value === false);
    }
}
