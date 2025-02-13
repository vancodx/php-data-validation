<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ListOf;

trait ListLenOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isListLenOf(mixed $value, callable $validator): bool
    {
        if (!static::isListLen($value)) {
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
     * @phpstan-assert-if-true non-empty-list<bool> $value
     */
    public static function isListLenOfBool(mixed $value): bool
    {
        return static::isListLenOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<int> $value
     */
    public static function isListLenOfInt(mixed $value): bool
    {
        return static::isListLenOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<non-negative-int> $value
     */
    public static function isListLenOfUInt(mixed $value): bool
    {
        return static::isListLenOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<positive-int> $value
     */
    public static function isListLenOfPosInt(mixed $value): bool
    {
        return static::isListLenOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<negative-int> $value
     */
    public static function isListLenOfNegInt(mixed $value): bool
    {
        return static::isListLenOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<positive-int> $value
     */
    public static function isListLenOfIntId(mixed $value): bool
    {
        return static::isListLenOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<float> $value
     */
    public static function isListLenOfFloat(mixed $value): bool
    {
        return static::isListLenOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListLenOfUFloat(mixed $value): bool
    {
        return static::isListLenOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListLenOfPosFloat(mixed $value): bool
    {
        return static::isListLenOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListLenOfNegFloat(mixed $value): bool
    {
        return static::isListLenOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<int|float> $value
     */
    public static function isListLenOfNum(mixed $value): bool
    {
        return static::isListLenOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListLenOfUNum(mixed $value): bool
    {
        return static::isListLenOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListLenOfPosNum(mixed $value): bool
    {
        return static::isListLenOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListLenOfNegNum(mixed $value): bool
    {
        return static::isListLenOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<string> $value
     */
    public static function isListLenOfStr(mixed $value): bool
    {
        return static::isListLenOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<non-empty-string> $value
     */
    public static function isListLenOfStrLen(mixed $value): bool
    {
        return static::isListLenOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<resource> $value
     */
    public static function isListLenOfRes(mixed $value): bool
    {
        return static::isListLenOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<object> $value
     */
    public static function isListLenOfObj(mixed $value): bool
    {
        return static::isListLenOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<class-string> $value
     */
    public static function isListLenOfCls(mixed $value): bool
    {
        return static::isListLenOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true non-empty-list<class-string> $value
     */
    public static function isListLenOfIfc(mixed $value): bool
    {
        return static::isListLenOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true non-empty-list<TObject> $value
     */
    public static function isListLenOfObjOf(mixed $value, string $class): bool
    {
        return static::isListLenOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true non-empty-list<class-string<TObject>> $value
     */
    public static function isListLenOfClsOf(mixed $value, string $class): bool
    {
        return static::isListLenOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
