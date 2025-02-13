<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ListOf;

trait ListDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isListDuoOf(mixed $value, callable $validator): bool
    {
        if (!static::isListDuo($value)) {
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
     * @phpstan-assert-if-true array{0: bool, 1: bool} $value
     */
    public static function isListDuoOfBool(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int, 1: int} $value
     */
    public static function isListDuoOfInt(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-negative-int, 1: non-negative-int} $value
     */
    public static function isListDuoOfUInt(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int} $value
     */
    public static function isListDuoOfPosInt(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: negative-int, 1: negative-int} $value
     */
    public static function isListDuoOfNegInt(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: positive-int, 1: positive-int} $value
     */
    public static function isListDuoOfIntId(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: float, 1: float} $value
     */
    public static function isListDuoOfFloat(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListDuoOfUFloat(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListDuoOfPosFloat(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListDuoOfNegFloat(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: int|float, 1: int|float} $value
     */
    public static function isListDuoOfNum(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListDuoOfUNum(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListDuoOfPosNum(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isListDuoOfNegNum(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: string, 1: string} $value
     */
    public static function isListDuoOfStr(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: non-empty-string, 1: non-empty-string} $value
     */
    public static function isListDuoOfStrLen(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: resource, 1: resource} $value
     */
    public static function isListDuoOfRes(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: object, 1: object} $value
     */
    public static function isListDuoOfObj(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string, 1: class-string} $value
     */
    public static function isListDuoOfCls(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{0: class-string, 1: class-string} $value
     */
    public static function isListDuoOfIfc(mixed $value): bool
    {
        return static::isListDuoOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{0: TObject, 1: TObject} $value
     */
    public static function isListDuoOfObjOf(mixed $value, string $class): bool
    {
        return static::isListDuoOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{0: class-string<TObject>, 1: class-string<TObject>} $value
     */
    public static function isListDuoOfClsOf(mixed $value, string $class): bool
    {
        return static::isListDuoOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
