<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ListOf;

trait ListOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isListOf(mixed $value, callable $validator): bool
    {
        if (!static::isList($value)) {
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
     * @phpstan-assert-if-true list<bool> $value
     */
    public static function isListOfBool(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isBool(...);
        return static::isListOf($value, $validator);
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<int> $value
     */
    public static function isListOfInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isInt(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<non-negative-int> $value
     */
    public static function isListOfUInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUInt(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<positive-int> $value
     */
    public static function isListOfPosInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosInt(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<negative-int> $value
     */
    public static function isListOfNegInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegInt(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<positive-int> $value
     */
    public static function isListOfIntId(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIntId(...);
        return static::isListOf($value, $validator);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<float> $value
     */
    public static function isListOfFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isFloat(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListOfUFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUFloat(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListOfPosFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosFloat(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListOfNegFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegFloat(...);
        return static::isListOf($value, $validator);
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<int|float> $value
     */
    public static function isListOfNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNum(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListOfUNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUNum(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListOfPosNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosNum(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListOfNegNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegNum(...);
        return static::isListOf($value, $validator);
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<string> $value
     */
    public static function isListOfStr(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStr(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<non-empty-string> $value
     */
    public static function isListOfStrLen(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStrLen(...);
        return static::isListOf($value, $validator);
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<resource> $value
     */
    public static function isListOfRes(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isRes(...);
        return static::isListOf($value, $validator);
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<object> $value
     */
    public static function isListOfObj(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isObj(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<class-string> $value
     */
    public static function isListOfCls(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isCls(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<class-string> $value
     */
    public static function isListOfIfc(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIfc(...);
        return static::isListOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true list<TObject> $value
     */
    public static function isListOfObjOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        $validator = static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class);
        return static::isListOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true list<class-string<TObject>> $value
     */
    public static function isListOfClsOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        $validator = static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class);
        return static::isListOf($value, $validator);
    }
}
