<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ArrOf;

trait ArrQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
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
        static $validator = static::isBool(...);
        return static::isArrQuadOf($value, $validator);
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int, int, int, int} $value
     */
    public static function isArrQuadOfInt(mixed $value): bool
    {
        static $validator = static::isInt(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-negative-int, non-negative-int, non-negative-int, non-negative-int} $value
     */
    public static function isArrQuadOfUInt(mixed $value): bool
    {
        static $validator = static::isUInt(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function isArrQuadOfPosInt(mixed $value): bool
    {
        static $validator = static::isPosInt(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{negative-int, negative-int, negative-int, negative-int} $value
     */
    public static function isArrQuadOfNegInt(mixed $value): bool
    {
        static $validator = static::isNegInt(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int, positive-int, positive-int, positive-int} $value
     */
    public static function isArrQuadOfIntId(mixed $value): bool
    {
        static $validator = static::isIntId(...);
        return static::isArrQuadOf($value, $validator);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float, float, float} $value
     */
    public static function isArrQuadOfFloat(mixed $value): bool
    {
        static $validator = static::isFloat(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrQuadOfUFloat(mixed $value): bool
    {
        static $validator = static::isUFloat(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrQuadOfPosFloat(mixed $value): bool
    {
        static $validator = static::isPosFloat(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrQuadOfNegFloat(mixed $value): bool
    {
        static $validator = static::isNegFloat(...);
        return static::isArrQuadOf($value, $validator);
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int|float, int|float, int|float, int|float} $value
     */
    public static function isArrQuadOfNum(mixed $value): bool
    {
        static $validator = static::isNum(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrQuadOfUNum(mixed $value): bool
    {
        static $validator = static::isUNum(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrQuadOfPosNum(mixed $value): bool
    {
        static $validator = static::isPosNum(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrQuadOfNegNum(mixed $value): bool
    {
        static $validator = static::isNegNum(...);
        return static::isArrQuadOf($value, $validator);
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{string, string, string, string} $value
     */
    public static function isArrQuadOfStr(mixed $value): bool
    {
        static $validator = static::isStr(...);
        return static::isArrQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string, non-empty-string, non-empty-string, non-empty-string} $value
     */
    public static function isArrQuadOfStrLen(mixed $value): bool
    {
        static $validator = static::isStrLen(...);
        return static::isArrQuadOf($value, $validator);
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{resource, resource, resource, resource} $value
     */
    public static function isArrQuadOfRes(mixed $value): bool
    {
        static $validator = static::isRes(...);
        return static::isArrQuadOf($value, $validator);
    }
}
