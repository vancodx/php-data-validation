<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ListOf;

trait ListTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isListTrioOf(mixed $value, callable $validator): bool
    {
        if (!static::isListTrio($value)) {
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
     * @phpstan-assert-if-true array{0: bool, 1: bool, 2: bool} $value
     */
    public static function isListTrioOfBool(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isBool(...);
        return static::isListTrioOf($value, $validator);
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int, 1: int, 2: int} $value
     */
    public static function isListTrioOfInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isInt(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-negative-int, 1: non-negative-int, 2: non-negative-int} $value
     */
    public static function isListTrioOfUInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUInt(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int, 2: positive-int} $value
     */
    public static function isListTrioOfPosInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosInt(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: negative-int, 1: negative-int, 2: negative-int} $value
     */
    public static function isListTrioOfNegInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegInt(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int, 2: positive-int} $value
     */
    public static function isListTrioOfIntId(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIntId(...);
        return static::isListTrioOf($value, $validator);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float} $value
     */
    public static function isListTrioOfFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isFloat(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfUFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUFloat(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfPosFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosFloat(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfNegFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegFloat(...);
        return static::isListTrioOf($value, $validator);
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int|float, 1: int|float, 2: int|float} $value
     */
    public static function isListTrioOfNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNum(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfUNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUNum(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfPosNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosNum(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfNegNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegNum(...);
        return static::isListTrioOf($value, $validator);
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: string, 1: string, 2: string} $value
     */
    public static function isListTrioOfStr(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStr(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-empty-string, 1: non-empty-string, 2: non-empty-string} $value
     */
    public static function isListTrioOfStrLen(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStrLen(...);
        return static::isListTrioOf($value, $validator);
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: resource, 1: resource, 2: resource} $value
     */
    public static function isListTrioOfRes(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isRes(...);
        return static::isListTrioOf($value, $validator);
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: object, 1: object, 2: object} $value
     */
    public static function isListTrioOfObj(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isObj(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string, 1: class-string, 2: class-string} $value
     */
    public static function isListTrioOfCls(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isCls(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string, 1: class-string, 2: class-string} $value
     */
    public static function isListTrioOfIfc(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIfc(...);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{0: TObject, 1: TObject, 2: TObject} $value
     */
    public static function isListTrioOfObjOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        $validator = static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class);
        return static::isListTrioOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{0: class-string<TObject>, 1: class-string<TObject>, 2: class-string<TObject>} $value
     */
    public static function isListTrioOfClsOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        $validator = static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class);
        return static::isListTrioOf($value, $validator);
    }
}
