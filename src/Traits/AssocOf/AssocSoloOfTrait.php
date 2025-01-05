<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocSoloOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssocSolo($value)) {
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
     * @phpstan-assert-if-true array{non-empty-string: bool} $value
     */
    public static function isAssocSoloOfBool(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isBool(...);
        return static::isAssocSoloOf($value, $validator);
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int} $value
     */
    public static function isAssocSoloOfInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isInt(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-negative-int} $value
     */
    public static function isAssocSoloOfUInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUInt(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int} $value
     */
    public static function isAssocSoloOfPosInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosInt(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: negative-int} $value
     */
    public static function isAssocSoloOfNegInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegInt(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int} $value
     */
    public static function isAssocSoloOfIntId(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIntId(...);
        return static::isAssocSoloOf($value, $validator);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float} $value
     */
    public static function isAssocSoloOfFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isFloat(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocSoloOfUFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUFloat(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocSoloOfPosFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosFloat(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocSoloOfNegFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegFloat(...);
        return static::isAssocSoloOf($value, $validator);
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int|float} $value
     */
    public static function isAssocSoloOfNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNum(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocSoloOfUNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUNum(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocSoloOfPosNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosNum(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocSoloOfNegNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegNum(...);
        return static::isAssocSoloOf($value, $validator);
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: string} $value
     */
    public static function isAssocSoloOfStr(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStr(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-empty-string} $value
     */
    public static function isAssocSoloOfStrLen(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStrLen(...);
        return static::isAssocSoloOf($value, $validator);
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: resource} $value
     */
    public static function isAssocSoloOfRes(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isRes(...);
        return static::isAssocSoloOf($value, $validator);
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: object} $value
     */
    public static function isAssocSoloOfObj(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isObj(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string} $value
     */
    public static function isAssocSoloOfCls(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isCls(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string} $value
     */
    public static function isAssocSoloOfIfc(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIfc(...);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: TObject} $value
     */
    public static function isAssocSoloOfObjOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class);
        return static::isAssocSoloOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string<TObject>} $value
     */
    public static function isAssocSoloOfClsOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class);
        return static::isAssocSoloOf($value, $validator);
    }
}
