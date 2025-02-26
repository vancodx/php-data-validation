<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ArrOf;

trait ArrQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     * @phpstan-assert-if-true array{mixed, mixed, mixed, mixed} $value
     */
    public static function isArrQuadOf(mixed $value, callable $validator): bool
    {
        if (!static::isArrQuad($value)) {
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
     * @phpstan-assert-if-true array{bool, bool, bool, bool} $value
     */
    public static function isArrQuadOfBool(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int, int, int, int} $value
     */
    public static function isArrQuadOfInt(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-negative-int, non-negative-int, non-negative-int, non-negative-int} $value
     */
    public static function isArrQuadOfUInt(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function isArrQuadOfPosInt(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{negative-int, negative-int, negative-int, negative-int} $value
     */
    public static function isArrQuadOfNegInt(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function isArrQuadOfIntId(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float, float} $value
     */
    public static function isArrQuadOfFloat(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float, float} $value
     */
    public static function isArrQuadOfUFloat(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float, float} $value
     */
    public static function isArrQuadOfPosFloat(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float, float} $value
     */
    public static function isArrQuadOfNegFloat(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int|float, int|float, int|float, int|float} $value
     */
    public static function isArrQuadOfNum(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-negative-int|float, non-negative-int|float, non-negative-int|float, non-negative-int|float} $value
     */
    public static function isArrQuadOfUNum(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int|float, positive-int|float, positive-int|float, positive-int|float} $value
     */
    public static function isArrQuadOfPosNum(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{negative-int|float, negative-int|float, negative-int|float, negative-int|float} $value
     */
    public static function isArrQuadOfNegNum(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{string, string, string, string} $value
     */
    public static function isArrQuadOfStr(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string, non-empty-string, non-empty-string, non-empty-string} $value
     */
    public static function isArrQuadOfStrLen(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{resource, resource, resource, resource} $value
     */
    public static function isArrQuadOfRes(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{object, object, object, object} $value
     */
    public static function isArrQuadOfObj(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{class-string, class-string, class-string, class-string} $value
     */
    public static function isArrQuadOfCls(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{class-string, class-string, class-string, class-string} $value
     */
    public static function isArrQuadOfIfc(mixed $value): bool
    {
        return static::isArrQuadOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{TObject, TObject, TObject, TObject} $value
     */
    public static function isArrQuadOfObjOf(mixed $value, string $class): bool
    {
        return static::isArrQuadOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{class-string<TObject>, class-string<TObject>, class-string<TObject>, class-string<TObject>} $value
     */
    public static function isArrQuadOfClsOf(mixed $value, string $class): bool
    {
        return static::isArrQuadOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
