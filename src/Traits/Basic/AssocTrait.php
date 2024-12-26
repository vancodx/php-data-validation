<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\Basic;

trait AssocTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, mixed> $value
     */
    public static function isAssoc(mixed $value): bool
    {
        if (!static::isArr($value)) {
            return false;
        }
        foreach ($value as $itemKey => $itemValue) {
            if (!static::isStrLen($itemKey)) {
                return false;
            }
        }
        return true;
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, mixed> $value
     */
    public static function isAssocLen(mixed $value): bool
    {
        return static::isAssoc($value) && count($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{} $value
     */
    public static function isEmptyAssoc(mixed $value): bool
    {
        return static::isAssoc($value) && !count($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed} $value
     */
    public static function isAssocSolo(mixed $value): bool
    {
        return static::isAssoc($value) && (count($value) === 1);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function isAssocDuo(mixed $value): bool
    {
        return static::isAssoc($value) && (count($value) === 2);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function isAssocTrio(mixed $value): bool
    {
        return static::isAssoc($value) && (count($value) === 3);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed, non-empty-string: mixed} $value
     */
    public static function isAssocQuad(mixed $value): bool
    {
        return static::isAssoc($value) && (count($value) === 4);
    }
}
