<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\OrNull;

trait AssocOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, mixed>|null $value
     */
    public static function isAssocOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isAssoc($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, mixed>|null $value
     */
    public static function isAssocLenOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isAssocLen($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{}|null $value
     */
    public static function isEmptyAssocOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isEmptyAssoc($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed}|null $value
     */
    public static function isAssocSoloOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isAssocSolo($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function isAssocDuoOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isAssocDuo($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function isAssocTrioOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isAssocTrio($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed}|null $value
     */
    public static function isAssocQuadOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isAssocQuad($value);
    }
}
