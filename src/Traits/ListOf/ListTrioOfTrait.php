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
        return static::isListTrioOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int, 1: int, 2: int} $value
     */
    public static function isListTrioOfInt(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-negative-int, 1: non-negative-int, 2: non-negative-int} $value
     */
    public static function isListTrioOfUInt(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int, 2: positive-int} $value
     */
    public static function isListTrioOfPosInt(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: negative-int, 1: negative-int, 2: negative-int} $value
     */
    public static function isListTrioOfNegInt(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int, 2: positive-int} $value
     */
    public static function isListTrioOfIntId(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float} $value
     */
    public static function isListTrioOfFloat(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float} $value
     */
    public static function isListTrioOfUFloat(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float} $value
     */
    public static function isListTrioOfPosFloat(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float} $value
     */
    public static function isListTrioOfNegFloat(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int|float, 1: int|float, 2: int|float} $value
     */
    public static function isListTrioOfNum(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfUNum(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfPosNum(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListTrioOfNegNum(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: string, 1: string, 2: string} $value
     */
    public static function isListTrioOfStr(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-empty-string, 1: non-empty-string, 2: non-empty-string} $value
     */
    public static function isListTrioOfStrLen(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: resource, 1: resource, 2: resource} $value
     */
    public static function isListTrioOfRes(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: object, 1: object, 2: object} $value
     */
    public static function isListTrioOfObj(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string, 1: class-string, 2: class-string} $value
     */
    public static function isListTrioOfCls(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string, 1: class-string, 2: class-string} $value
     */
    public static function isListTrioOfIfc(mixed $value): bool
    {
        return static::isListTrioOf($value, static::isIfc(...));
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
        return static::isListTrioOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
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
        return static::isListTrioOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
