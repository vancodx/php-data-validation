<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait ListTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<mixed> $value
     */
    public static function isList(mixed $value): bool
    {
        return is_array($value) && array_is_list($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListLen(mixed $value): bool
    {
        return static::isList($value) && count($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isEmptyList(mixed $value): bool
    {
        return static::isList($value) && !count($value);
    }
}
