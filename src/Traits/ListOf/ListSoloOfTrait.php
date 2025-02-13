<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ListOf;

trait ListSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isListSoloOf(mixed $value, callable $validator): bool
    {
        if (!static::isListSolo($value)) {
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
     * @phpstan-assert-if-true array{0: bool} $value
     */
    public static function isListSoloOfBool(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int} $value
     */
    public static function isListSoloOfInt(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-negative-int} $value
     */
    public static function isListSoloOfUInt(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int} $value
     */
    public static function isListSoloOfPosInt(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: negative-int} $value
     */
    public static function isListSoloOfNegInt(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int} $value
     */
    public static function isListSoloOfIntId(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float} $value
     */
    public static function isListSoloOfFloat(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListSoloOfUFloat(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListSoloOfPosFloat(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListSoloOfNegFloat(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int|float} $value
     */
    public static function isListSoloOfNum(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListSoloOfUNum(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListSoloOfPosNum(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListSoloOfNegNum(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: string} $value
     */
    public static function isListSoloOfStr(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-empty-string} $value
     */
    public static function isListSoloOfStrLen(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: resource} $value
     */
    public static function isListSoloOfRes(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: object} $value
     */
    public static function isListSoloOfObj(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string} $value
     */
    public static function isListSoloOfCls(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string} $value
     */
    public static function isListSoloOfIfc(mixed $value): bool
    {
        return static::isListSoloOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{0: TObject} $value
     */
    public static function isListSoloOfObjOf(mixed $value, string $class): bool
    {
        return static::isListSoloOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{0: class-string<TObject>} $value
     */
    public static function isListSoloOfClsOf(mixed $value, string $class): bool
    {
        return static::isListSoloOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
