<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\OrNull;

trait ObjOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true object|null $value
     */
    public static function isObjOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isObj($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true class-string|null $value
     */
    public static function isClsOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isCls($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true class-string|null $value
     */
    public static function isIfcOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isIfc($value);
    }
}
