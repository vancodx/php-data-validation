<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\OrNull;

trait ListOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<mixed>|null $value
     */
    public static function isListOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isList($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<mixed>|null $value
     */
    public static function isListLenOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isListLen($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{}|null $value
     */
    public static function isEmptyListOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isEmptyList($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: mixed}|null $value
     */
    public static function isListSoloOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isListSolo($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: mixed, 1: mixed}|null $value
     */
    public static function isListDuoOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isListDuo($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: mixed, 1: mixed, 2: mixed}|null $value
     */
    public static function isListTrioOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isListTrio($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: mixed, 1: mixed, 2: mixed, 3: mixed}|null $value
     */
    public static function isListQuadOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isListQuad($value);
    }
}
