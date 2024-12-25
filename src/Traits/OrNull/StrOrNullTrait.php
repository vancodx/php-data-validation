<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\OrNull;

trait StrOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true string|null $value
     */
    public static function isStrOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isStr($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-string|null $value
     */
    public static function isStrLenOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isStrLen($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true ''|null $value
     */
    public static function isEmptyStrOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isEmptyStr($value);
    }
}
