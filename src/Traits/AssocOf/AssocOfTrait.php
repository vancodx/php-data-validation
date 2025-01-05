<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssoc($value)) {
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
     * @phpstan-assert-if-true array<non-empty-string, bool> $value
     */
    public static function isAssocOfBool(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isBool(...);
        return static::isAssocOf($value, $validator);
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, int> $value
     */
    public static function isAssocOfInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isInt(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, non-negative-int> $value
     */
    public static function isAssocOfUInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUInt(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, positive-int> $value
     */
    public static function isAssocOfPosInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosInt(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, negative-int> $value
     */
    public static function isAssocOfNegInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegInt(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, positive-int> $value
     */
    public static function isAssocOfIntId(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIntId(...);
        return static::isAssocOf($value, $validator);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, float> $value
     */
    public static function isAssocOfFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isFloat(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfUFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUFloat(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfPosFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosFloat(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfNegFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegFloat(...);
        return static::isAssocOf($value, $validator);
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, int|float> $value
     */
    public static function isAssocOfNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNum(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfUNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUNum(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfPosNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosNum(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfNegNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegNum(...);
        return static::isAssocOf($value, $validator);
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, string> $value
     */
    public static function isAssocOfStr(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStr(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, non-empty-string> $value
     */
    public static function isAssocOfStrLen(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStrLen(...);
        return static::isAssocOf($value, $validator);
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, resource> $value
     */
    public static function isAssocOfRes(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isRes(...);
        return static::isAssocOf($value, $validator);
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, object> $value
     */
    public static function isAssocOfObj(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isObj(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, class-string> $value
     */
    public static function isAssocOfCls(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isCls(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, class-string> $value
     */
    public static function isAssocOfIfc(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIfc(...);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, TObject> $value
     */
    public static function isAssocOfObjOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class);
        return static::isAssocOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, class-string<TObject>> $value
     */
    public static function isAssocOfClsOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class);
        return static::isAssocOf($value, $validator);
    }
}
