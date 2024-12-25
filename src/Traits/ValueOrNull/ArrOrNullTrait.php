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
     * @phpstan-assert-if-true non-empty-array<mixed>|null $value
     */
    public static function isArrLenOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isArrLen($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{}|null $value
     */
    public static function isEmptyArrOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isEmptyArr($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{mixed}|null $value
     */
    public static function isArrSoloOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isArrSolo($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{mixed, mixed}|null $value
     */
    public static function isArrDuoOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isArrDuo($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{mixed, mixed, mixed}|null $value
     */
    public static function isArrTrioOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isArrTrio($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{mixed, mixed, mixed, mixed}|null $value
     */
    public static function isArrQuadOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isArrQuad($value);
    }
}
