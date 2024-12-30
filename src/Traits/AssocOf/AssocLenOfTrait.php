<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocLenOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocLenOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssocLen($value)) {
            return false;
        }
        foreach ($value as $itemValue) {
            if (!$validator($itemValue)) {
                return false;
            }
        }
        return true;
    }

    // ========== BOOL ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, bool> $value
     */
    public static function isAssocLenOfBool(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isBool(...);
        return static::isAssocLenOf($value, $validator);
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, int> $value
     */
    public static function isAssocLenOfInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isInt(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, non-negative-int> $value
     */
    public static function isAssocLenOfUInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUInt(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, positive-int> $value
     */
    public static function isAssocLenOfPosInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosInt(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, negative-int> $value
     */
    public static function isAssocLenOfNegInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegInt(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, positive-int> $value
     */
    public static function isAssocLenOfIntId(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIntId(...);
        return static::isAssocLenOf($value, $validator);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, float> $value
     */
    public static function isAssocLenOfFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isFloat(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfUFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUFloat(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfPosFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosFloat(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfNegFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegFloat(...);
        return static::isAssocLenOf($value, $validator);
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, int|float> $value
     */
    public static function isAssocLenOfNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNum(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfUNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUNum(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfPosNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosNum(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfNegNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegNum(...);
        return static::isAssocLenOf($value, $validator);
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, string> $value
     */
    public static function isAssocLenOfStr(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStr(...);
        return static::isAssocLenOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, non-empty-string> $value
     */
    public static function isAssocLenOfStrLen(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStrLen(...);
        return static::isAssocLenOf($value, $validator);
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, resource> $value
     */
    public static function isAssocLenOfRes(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isRes(...);
        return static::isAssocLenOf($value, $validator);
    }
}
