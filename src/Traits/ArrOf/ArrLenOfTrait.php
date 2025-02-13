<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ArrOf;

trait ArrLenOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isArrLenOf(mixed $value, callable $validator): bool
    {
        if (!static::isArrLen($value)) {
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
     * @phpstan-assert-if-true non-empty-array<bool> $value
     */
    public static function isArrLenOfBool(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<int> $value
     */
    public static function isArrLenOfInt(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-negative-int> $value
     */
    public static function isArrLenOfUInt(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<positive-int> $value
     */
    public static function isArrLenOfPosInt(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<negative-int> $value
     */
    public static function isArrLenOfNegInt(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<positive-int> $value
     */
    public static function isArrLenOfIntId(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<float> $value
     */
    public static function isArrLenOfFloat(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrLenOfUFloat(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrLenOfPosFloat(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrLenOfNegFloat(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<int|float> $value
     */
    public static function isArrLenOfNum(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrLenOfUNum(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrLenOfPosNum(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrLenOfNegNum(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<string> $value
     */
    public static function isArrLenOfStr(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string> $value
     */
    public static function isArrLenOfStrLen(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<resource> $value
     */
    public static function isArrLenOfRes(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<object> $value
     */
    public static function isArrLenOfObj(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<class-string> $value
     */
    public static function isArrLenOfCls(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<class-string> $value
     */
    public static function isArrLenOfIfc(mixed $value): bool
    {
        return static::isArrLenOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true non-empty-array<TObject> $value
     */
    public static function isArrLenOfObjOf(mixed $value, string $class): bool
    {
        return static::isArrLenOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true non-empty-array<class-string<TObject>> $value
     */
    public static function isArrLenOfClsOf(mixed $value, string $class): bool
    {
        return static::isArrLenOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
