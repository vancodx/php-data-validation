<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait BoolTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true bool $value
     */
    public static function isBool(mixed $value): bool
    {
        return is_bool($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true true $value
     */
    public static function isTrue(mixed $value): bool
    {
        return ($value === true);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true false $value
     */
    public static function isFalse(mixed $value): bool
    {
        return ($value === false);
    }
}
