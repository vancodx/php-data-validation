<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ArrOf;

trait ArrDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isArrDuoOf(mixed $value, callable $validator): bool
    {
        if (!static::isArrDuo($value)) {
            return false;
        }
        foreach ($value as $item) {
            if (!$validator($item)) {
                return false;
            }
        }
        return true;
    }

    /* ---------- BOOL ---------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{bool, bool} $value
     */
    public static function isArrDuoOfBool(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isBool(...));
    }

    /* ---------- INT ----------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int, int} $value
     */
    public static function isArrDuoOfInt(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-negative-int, non-negative-int} $value
     */
    public static function isArrDuoOfUInt(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int, positive-int} $value
     */
    public static function isArrDuoOfPosInt(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{negative-int, negative-int} $value
     */
    public static function isArrDuoOfNegInt(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{positive-int, positive-int} $value
     */
    public static function isArrDuoOfIntId(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isIntId(...));
    }

    /* ---------- FLOAT --------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{float, float} $value
     */
    public static function isArrDuoOfFloat(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrDuoOfUFloat(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrDuoOfPosFloat(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrDuoOfNegFloat(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isNegFloat(...));
    }

    /* ---------- NUM ----------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{int|float, int|float} $value
     */
    public static function isArrDuoOfNum(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrDuoOfUNum(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrDuoOfPosNum(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrDuoOfNegNum(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isNegNum(...));
    }

    /* ---------- STR ----------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{string, string} $value
     */
    public static function isArrDuoOfStr(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string, non-empty-string} $value
     */
    public static function isArrDuoOfStrLen(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isStrLen(...));
    }

    /* ---------- MISC ---------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{resource, resource} $value
     */
    public static function isArrDuoOfRes(mixed $value): bool
    {
        return static::isArrDuoOf($value, static::isRes(...));
    }
}