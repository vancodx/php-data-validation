<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits;

trait StrTrait
{
    public static function isStr(mixed $value): bool
    {
        return is_string($value);
    }

    public static function isStrLen(mixed $value): bool
    {
        return static::isStr($value) && strlen($value);
    }

    public static function isEmptyStr(mixed $value): bool
    {
        return static::isStr($value) && !strlen($value);
    }
}
