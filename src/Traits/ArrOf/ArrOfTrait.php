<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ArrOf;

trait ArrOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isArrOf(mixed $value, callable $validator): bool
    {
        if (!static::isArr($value)) {
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
     * @phpstan-assert-if-true array<bool> $value
     */
    public static function isArrOfBool(mixed $value): bool
    {
        return static::isArrOf($value, static::isBool(...));
    }

    /* ---------- INT ----------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<int> $value
     */
    public static function isArrOfInt(mixed $value): bool
    {
        return static::isArrOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-negative-int> $value
     */
    public static function isArrOfUInt(mixed $value): bool
    {
        return static::isArrOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<positive-int> $value
     */
    public static function isArrOfPosInt(mixed $value): bool
    {
        return static::isArrOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<negative-int> $value
     */
    public static function isArrOfNegInt(mixed $value): bool
    {
        return static::isArrOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<positive-int> $value
     */
    public static function isArrOfIntId(mixed $value): bool
    {
        return static::isArrOf($value, static::isIntId(...));
    }

    /* ---------- FLOAT --------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<float> $value
     */
    public static function isArrOfFloat(mixed $value): bool
    {
        return static::isArrOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrOfUFloat(mixed $value): bool
    {
        return static::isArrOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrOfPosFloat(mixed $value): bool
    {
        return static::isArrOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrOfNegFloat(mixed $value): bool
    {
        return static::isArrOf($value, static::isNegFloat(...));
    }

    /* ---------- NUM ----------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<int|float> $value
     */
    public static function isArrOfNum(mixed $value): bool
    {
        return static::isArrOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrOfUNum(mixed $value): bool
    {
        return static::isArrOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrOfPosNum(mixed $value): bool
    {
        return static::isArrOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isArrOfNegNum(mixed $value): bool
    {
        return static::isArrOf($value, static::isNegNum(...));
    }

    /* ---------- STR ----------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<string> $value
     */
    public static function isArrOfStr(mixed $value): bool
    {
        return static::isArrOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<non-empty-string> $value
     */
    public static function isArrOfStrLen(mixed $value): bool
    {
        return static::isArrOf($value, static::isStrLen(...));
    }

    /* ---------- MISC ---------------------------------------------------------- */

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array<resource> $value
     */
    public static function isArrOfRes(mixed $value): bool
    {
        return static::isArrOf($value, static::isRes(...));
    }
}
