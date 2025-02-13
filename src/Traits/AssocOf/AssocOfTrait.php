<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssoc($value)) {
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
     * @phpstan-assert-if-true array<non-empty-string, bool> $value
     */
    public static function isAssocOfBool(mixed $value): bool
    {
        return static::isAssocOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, int> $value
     */
    public static function isAssocOfInt(mixed $value): bool
    {
        return static::isAssocOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, non-negative-int> $value
     */
    public static function isAssocOfUInt(mixed $value): bool
    {
        return static::isAssocOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, positive-int> $value
     */
    public static function isAssocOfPosInt(mixed $value): bool
    {
        return static::isAssocOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, negative-int> $value
     */
    public static function isAssocOfNegInt(mixed $value): bool
    {
        return static::isAssocOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, positive-int> $value
     */
    public static function isAssocOfIntId(mixed $value): bool
    {
        return static::isAssocOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, float> $value
     */
    public static function isAssocOfFloat(mixed $value): bool
    {
        return static::isAssocOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfUFloat(mixed $value): bool
    {
        return static::isAssocOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfPosFloat(mixed $value): bool
    {
        return static::isAssocOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfNegFloat(mixed $value): bool
    {
        return static::isAssocOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, int|float> $value
     */
    public static function isAssocOfNum(mixed $value): bool
    {
        return static::isAssocOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfUNum(mixed $value): bool
    {
        return static::isAssocOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfPosNum(mixed $value): bool
    {
        return static::isAssocOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocOfNegNum(mixed $value): bool
    {
        return static::isAssocOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, string> $value
     */
    public static function isAssocOfStr(mixed $value): bool
    {
        return static::isAssocOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, non-empty-string> $value
     */
    public static function isAssocOfStrLen(mixed $value): bool
    {
        return static::isAssocOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, resource> $value
     */
    public static function isAssocOfRes(mixed $value): bool
    {
        return static::isAssocOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, object> $value
     */
    public static function isAssocOfObj(mixed $value): bool
    {
        return static::isAssocOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, class-string> $value
     */
    public static function isAssocOfCls(mixed $value): bool
    {
        return static::isAssocOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, class-string> $value
     */
    public static function isAssocOfIfc(mixed $value): bool
    {
        return static::isAssocOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, TObject> $value
     */
    public static function isAssocOfObjOf(mixed $value, string $class): bool
    {
        return static::isAssocOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string, class-string<TObject>> $value
     */
    public static function isAssocOfClsOf(mixed $value, string $class): bool
    {
        return static::isAssocOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
