<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits;

trait ListTrait
{
    public static function isList(mixed $value): bool
    {
        return is_array($value) && array_is_list($value);
    }

    public static function isListLen(mixed $value): bool
    {
        return static::isList($value) && count($value);
    }

    public static function isEmptyList(mixed $value): bool
    {
        return static::isList($value) && !count($value);
    }
}
