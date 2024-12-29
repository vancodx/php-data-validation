<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ListOf;

trait ListQuadOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isListQuadOf(mixed $value, callable $validator): bool
    {
        if (!static::isListQuad($value)) {
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
     * @phpstan-assert-if-true array{0: bool, 1: bool, 2: bool, 3: bool} $value
     */
    public static function isListQuadOfBool(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isBool(...);
        return static::isListQuadOf($value, $validator);
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int, 1: int, 2: int, 3: int} $value
     */
    public static function isListQuadOfInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isInt(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-negative-int, 1: non-negative-int, 2: non-negative-int, 3: non-negative-int} $value
     */
    public static function isListQuadOfUInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUInt(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int, 2: positive-int, 3: positive-int} $value
     */
    public static function isListQuadOfPosInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosInt(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: negative-int, 1: negative-int, 2: negative-int, 3: negative-int} $value
     */
    public static function isListQuadOfNegInt(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegInt(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int, 2: positive-int, 3: positive-int} $value
     */
    public static function isListQuadOfIntId(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isIntId(...);
        return static::isListQuadOf($value, $validator);
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float, 2: float, 3: float} $value
     */
    public static function isListQuadOfFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isFloat(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfUFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUFloat(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfPosFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosFloat(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfNegFloat(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegFloat(...);
        return static::isListQuadOf($value, $validator);
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int|float, 1: int|float, 2: int|float, 3: int|float} $value
     */
    public static function isListQuadOfNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNum(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfUNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isUNum(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfPosNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isPosNum(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListQuadOfNegNum(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isNegNum(...);
        return static::isListQuadOf($value, $validator);
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: string, 1: string, 2: string, 3: string} $value
     */
    public static function isListQuadOfStr(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStr(...);
        return static::isListQuadOf($value, $validator);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-empty-string, 1: non-empty-string, 2: non-empty-string, 3: non-empty-string} $value
     */
    public static function isListQuadOfStrLen(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isStrLen(...);
        return static::isListQuadOf($value, $validator);
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: resource, 1: resource, 2: resource, 3: resource} $value
     */
    public static function isListQuadOfRes(mixed $value): bool
    {
        /** @var \Closure(mixed): bool $validator */
        static $validator = static::isRes(...);
        return static::isListQuadOf($value, $validator);
    }
}
