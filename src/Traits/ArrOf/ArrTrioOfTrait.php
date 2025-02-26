<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ArrOf;

trait ArrTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isArrTrioOf(mixed $value, callable $validator): bool
    {
        if (!static::isArrTrio($value)) {
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
     * @phpstan-assert-if-true array{bool, bool, bool} $value
     */
    public static function isArrTrioOfBool(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int, int, int} $value
     */
    public static function isArrTrioOfInt(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-negative-int, non-negative-int, non-negative-int} $value
     */
    public static function isArrTrioOfUInt(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int, positive-int, positive-int} $value
     */
    public static function isArrTrioOfPosInt(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{negative-int, negative-int, negative-int} $value
     */
    public static function isArrTrioOfNegInt(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int, positive-int, positive-int} $value
     */
    public static function isArrTrioOfIntId(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float} $value
     */
    public static function isArrTrioOfFloat(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float} $value
     */
    public static function isArrTrioOfUFloat(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float} $value
     */
    public static function isArrTrioOfPosFloat(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float} $value
     */
    public static function isArrTrioOfNegFloat(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int|float, int|float, int|float} $value
     */
    public static function isArrTrioOfNum(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrTrioOfUNum(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrTrioOfPosNum(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrTrioOfNegNum(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{string, string, string} $value
     */
    public static function isArrTrioOfStr(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string, non-empty-string, non-empty-string} $value
     */
    public static function isArrTrioOfStrLen(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{resource, resource, resource} $value
     */
    public static function isArrTrioOfRes(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{object, object, object} $value
     */
    public static function isArrTrioOfObj(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{class-string, class-string, class-string} $value
     */
    public static function isArrTrioOfCls(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{class-string, class-string, class-string} $value
     */
    public static function isArrTrioOfIfc(mixed $value): bool
    {
        return static::isArrTrioOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{TObject, TObject, TObject} $value
     */
    public static function isArrTrioOfObjOf(mixed $value, string $class): bool
    {
        return static::isArrTrioOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{class-string<TObject>, class-string<TObject>, class-string<TObject>} $value
     */
    public static function isArrTrioOfClsOf(mixed $value, string $class): bool
    {
        return static::isArrTrioOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
