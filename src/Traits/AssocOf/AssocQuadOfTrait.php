<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocQuadOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssocQuad($value)) {
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
     * @phpstan-assert-if-true array{non-empty-string: bool, non-empty-string: bool, non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function isAssocQuadOfBool(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int, non-empty-string: int, non-empty-string: int, non-empty-string: int} $value
     */
    public static function isAssocQuadOfInt(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function isAssocQuadOfUInt(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function isAssocQuadOfPosInt(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function isAssocQuadOfNegInt(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function isAssocQuadOfIntId(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float, non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function isAssocQuadOfFloat(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocQuadOfUFloat(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocQuadOfPosFloat(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocQuadOfNegFloat(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function isAssocQuadOfNum(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocQuadOfUNum(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocQuadOfPosNum(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocQuadOfNegNum(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: string, non-empty-string: string, non-empty-string: string, non-empty-string: string} $value
     */
    public static function isAssocQuadOfStr(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function isAssocQuadOfStrLen(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: resource, non-empty-string: resource, non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function isAssocQuadOfRes(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: object, non-empty-string: object, non-empty-string: object, non-empty-string: object} $value
     */
    public static function isAssocQuadOfObj(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function isAssocQuadOfCls(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function isAssocQuadOfIfc(mixed $value): bool
    {
        return static::isAssocQuadOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function isAssocQuadOfObjOf(mixed $value, string $class): bool
    {
        return static::isAssocQuadOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function isAssocQuadOfClsOf(mixed $value, string $class): bool
    {
        return static::isAssocQuadOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
