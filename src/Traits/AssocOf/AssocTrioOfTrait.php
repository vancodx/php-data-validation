<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocTrioOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssocTrio($value)) {
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
     * @phpstan-assert-if-true array{non-empty-string: bool, non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function isAssocTrioOfBool(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isBool(...);
        return static::isAssocTrioOf($value, $validator);
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int, non-empty-string: int, non-empty-string: int} $value
     */
    public static function isAssocTrioOfInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isInt(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function isAssocTrioOfUInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUInt(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function isAssocTrioOfPosInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosInt(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function isAssocTrioOfNegInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegInt(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function isAssocTrioOfIntId(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIntId(...);
        return static::isAssocTrioOf($value, $validator);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function isAssocTrioOfFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isFloat(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfUFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUFloat(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfPosFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosFloat(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfNegFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegFloat(...);
        return static::isAssocTrioOf($value, $validator);
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function isAssocTrioOfNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNum(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfUNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUNum(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfPosNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosNum(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfNegNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegNum(...);
        return static::isAssocTrioOf($value, $validator);
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: string, non-empty-string: string, non-empty-string: string} $value
     */
    public static function isAssocTrioOfStr(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStr(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function isAssocTrioOfStrLen(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStrLen(...);
        return static::isAssocTrioOf($value, $validator);
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: resource, non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function isAssocTrioOfRes(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isRes(...);
        return static::isAssocTrioOf($value, $validator);
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: object, non-empty-string: object, non-empty-string: object} $value
     */
    public static function isAssocTrioOfObj(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isObj(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function isAssocTrioOfCls(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isCls(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function isAssocTrioOfIfc(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIfc(...);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function isAssocTrioOfObjOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        $validator = static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function isAssocTrioOfClsOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        $validator = static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class);
        return static::isAssocTrioOf($value, $validator);
    }
}
