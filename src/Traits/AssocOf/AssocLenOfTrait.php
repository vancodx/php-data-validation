<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocLenOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocLenOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssocLen($value)) {
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
     * @phpstan-assert-if-true non-empty-array<non-empty-string, bool> $value
     */
    public static function isAssocLenOfBool(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, int> $value
     */
    public static function isAssocLenOfInt(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, non-negative-int> $value
     */
    public static function isAssocLenOfUInt(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, positive-int> $value
     */
    public static function isAssocLenOfPosInt(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, negative-int> $value
     */
    public static function isAssocLenOfNegInt(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, positive-int> $value
     */
    public static function isAssocLenOfIntId(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, float> $value
     */
    public static function isAssocLenOfFloat(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfUFloat(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfPosFloat(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfNegFloat(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, int|float> $value
     */
    public static function isAssocLenOfNum(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfUNum(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfPosNum(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocLenOfNegNum(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, string> $value
     */
    public static function isAssocLenOfStr(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, non-empty-string> $value
     */
    public static function isAssocLenOfStrLen(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, resource> $value
     */
    public static function isAssocLenOfRes(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, object> $value
     */
    public static function isAssocLenOfObj(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, class-string> $value
     */
    public static function isAssocLenOfCls(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, class-string> $value
     */
    public static function isAssocLenOfIfc(mixed $value): bool
    {
        return static::isAssocLenOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, TObject> $value
     */
    public static function isAssocLenOfObjOf(mixed $value, string $class): bool
    {
        return static::isAssocLenOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true non-empty-array<non-empty-string, class-string<TObject>> $value
     */
    public static function isAssocLenOfClsOf(mixed $value, string $class): bool
    {
        return static::isAssocLenOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
