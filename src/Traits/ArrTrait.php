<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits;

trait ArrTrait
{
    public static function isArr(mixed $value): bool
    {
        return is_array($value);
    }

    public static function isArrLen(mixed $value): bool
    {
        return static::isArr($value) && count($value);
    }

    public static function isEmptyArr(mixed $value): bool
    {
        return static::isArr($value) && !count($value);
    }
}
