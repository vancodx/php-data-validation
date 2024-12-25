<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ValueOrNull;

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
}
