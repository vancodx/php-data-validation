<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ValueOrNull;

trait ArrOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<mixed>|null $value
     */
    public static function isArrOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isArr($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrLenOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isArrLen($value);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isEmptyArrOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isEmptyArr($value);
    }
}
