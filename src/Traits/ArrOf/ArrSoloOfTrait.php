<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ArrOf;

trait ArrSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isArrSoloOf(mixed $value, callable $validator): bool
    {
        if (!static::isArrSolo($value)) {
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
     * @phpstan-assert-if-true array{bool} $value
     */
    public static function isArrSoloOfBool(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int} $value
     */
    public static function isArrSoloOfInt(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-negative-int} $value
     */
    public static function isArrSoloOfUInt(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int} $value
     */
    public static function isArrSoloOfPosInt(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{negative-int} $value
     */
    public static function isArrSoloOfNegInt(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int} $value
     */
    public static function isArrSoloOfIntId(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float} $value
     */
    public static function isArrSoloOfFloat(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrSoloOfUFloat(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrSoloOfPosFloat(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrSoloOfNegFloat(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int|float} $value
     */
    public static function isArrSoloOfNum(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrSoloOfUNum(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrSoloOfPosNum(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrSoloOfNegNum(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{string} $value
     */
    public static function isArrSoloOfStr(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string} $value
     */
    public static function isArrSoloOfStrLen(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{resource} $value
     */
    public static function isArrSoloOfRes(mixed $value): bool
    {
        return static::isArrSoloOf($value, static::isRes(...));
    }
}
