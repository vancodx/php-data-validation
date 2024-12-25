<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait ListTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<mixed> $value
     */
    public static function isList(mixed $value): bool
    {
        return is_array($value) && array_is_list($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<mixed> $value
     */
    public static function isListLen(mixed $value): bool
    {
        return static::isList($value) && count($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{} $value
     */
    public static function isEmptyList(mixed $value): bool
    {
        return static::isList($value) && !count($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: mixed} $value
     */
    public static function isListSolo(mixed $value): bool
    {
        return static::isList($value) && (count($value) === 1);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: mixed, 1: mixed} $value
     */
    public static function isListDuo(mixed $value): bool
    {
        return static::isList($value) && (count($value) === 2);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: mixed, 1: mixed, 2: mixed} $value
     */
    public static function isListTrio(mixed $value): bool
    {
        return static::isList($value) && (count($value) === 3);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: mixed, 1: mixed, 2: mixed, 3: mixed} $value
     */
    public static function isListQuad(mixed $value): bool
    {
        return static::isList($value) && (count($value) === 4);
    }
}
