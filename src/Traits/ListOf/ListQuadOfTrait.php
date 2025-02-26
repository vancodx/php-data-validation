<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ListOf;

trait ListQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isListQuadOf(mixed $value, callable $validator): bool
    {
        if (!static::isListQuad($value)) {
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
     * @phpstan-assert-if-true array{0: bool, 1: bool, 2: bool, 3: bool} $value
     */
    public static function isListQuadOfBool(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int, 1: int, 2: int, 3: int} $value
     */
    public static function isListQuadOfInt(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-negative-int, 1: non-negative-int, 2: non-negative-int, 3: non-negative-int} $value
     */
    public static function isListQuadOfUInt(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int, 2: positive-int, 3: positive-int} $value
     */
    public static function isListQuadOfPosInt(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: negative-int, 1: negative-int, 2: negative-int, 3: negative-int} $value
     */
    public static function isListQuadOfNegInt(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int, 2: positive-int, 3: positive-int} $value
     */
    public static function isListQuadOfIntId(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function isListQuadOfFloat(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function isListQuadOfUFloat(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function isListQuadOfPosFloat(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function isListQuadOfNegFloat(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int|float, 1: int|float, 2: int|float, 3: int|float} $value
     */
    public static function isListQuadOfNum(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfUNum(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfPosNum(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfNegNum(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: string, 1: string, 2: string, 3: string} $value
     */
    public static function isListQuadOfStr(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-empty-string, 1: non-empty-string, 2: non-empty-string, 3: non-empty-string} $value
     */
    public static function isListQuadOfStrLen(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: resource, 1: resource, 2: resource, 3: resource} $value
     */
    public static function isListQuadOfRes(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: object, 1: object, 2: object, 3: object} $value
     */
    public static function isListQuadOfObj(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string, 1: class-string, 2: class-string, 3: class-string} $value
     */
    public static function isListQuadOfCls(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string, 1: class-string, 2: class-string, 3: class-string} $value
     */
    public static function isListQuadOfIfc(mixed $value): bool
    {
        return static::isListQuadOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{0: TObject, 1: TObject, 2: TObject, 3: TObject} $value
     */
    public static function isListQuadOfObjOf(mixed $value, string $class): bool
    {
        return static::isListQuadOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{0: class-string<TObject>, 1: class-string<TObject>, 2: class-string<TObject>, 3: class-string<TObject>} $value
     */
    public static function isListQuadOfClsOf(mixed $value, string $class): bool
    {
        return static::isListQuadOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
