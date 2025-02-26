<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ListOf;

trait ListOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     * @phpstan-assert-if-true list<mixed> $value
     */
    public static function isListOf(mixed $value, callable $validator): bool
    {
        if (!static::isList($value)) {
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
     * @phpstan-assert-if-true list<bool> $value
     */
    public static function isListOfBool(mixed $value): bool
    {
        return static::isListOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<int> $value
     */
    public static function isListOfInt(mixed $value): bool
    {
        return static::isListOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<non-negative-int> $value
     */
    public static function isListOfUInt(mixed $value): bool
    {
        return static::isListOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<positive-int> $value
     */
    public static function isListOfPosInt(mixed $value): bool
    {
        return static::isListOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<negative-int> $value
     */
    public static function isListOfNegInt(mixed $value): bool
    {
        return static::isListOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<positive-int> $value
     */
    public static function isListOfIntId(mixed $value): bool
    {
        return static::isListOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<float> $value
     */
    public static function isListOfFloat(mixed $value): bool
    {
        return static::isListOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<float> $value
     */
    public static function isListOfUFloat(mixed $value): bool
    {
        return static::isListOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<float> $value
     */
    public static function isListOfPosFloat(mixed $value): bool
    {
        return static::isListOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<float> $value
     */
    public static function isListOfNegFloat(mixed $value): bool
    {
        return static::isListOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<int|float> $value
     */
    public static function isListOfNum(mixed $value): bool
    {
        return static::isListOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<non-negative-int|float> $value
     */
    public static function isListOfUNum(mixed $value): bool
    {
        return static::isListOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<positive-int|float> $value
     */
    public static function isListOfPosNum(mixed $value): bool
    {
        return static::isListOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<negative-int|float> $value
     */
    public static function isListOfNegNum(mixed $value): bool
    {
        return static::isListOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<string> $value
     */
    public static function isListOfStr(mixed $value): bool
    {
        return static::isListOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<non-empty-string> $value
     */
    public static function isListOfStrLen(mixed $value): bool
    {
        return static::isListOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<resource> $value
     */
    public static function isListOfRes(mixed $value): bool
    {
        return static::isListOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<object> $value
     */
    public static function isListOfObj(mixed $value): bool
    {
        return static::isListOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<class-string> $value
     */
    public static function isListOfCls(mixed $value): bool
    {
        return static::isListOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true list<class-string> $value
     */
    public static function isListOfIfc(mixed $value): bool
    {
        return static::isListOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true list<TObject> $value
     */
    public static function isListOfObjOf(mixed $value, string $class): bool
    {
        return static::isListOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true list<class-string<TObject>> $value
     */
    public static function isListOfClsOf(mixed $value, string $class): bool
    {
        return static::isListOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
