<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocDuoOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocDuoOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssocDuo($value)) {
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
     * @phpstan-assert-if-true array{non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function isAssocDuoOfBool(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int, non-empty-string: int} $value
     */
    public static function isAssocDuoOfInt(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function isAssocDuoOfUInt(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function isAssocDuoOfPosInt(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function isAssocDuoOfNegInt(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function isAssocDuoOfIntId(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function isAssocDuoOfFloat(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function isAssocDuoOfUFloat(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function isAssocDuoOfPosFloat(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float, non-empty-string: float} $value
     */
    public static function isAssocDuoOfNegFloat(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function isAssocDuoOfNum(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-negative-int|float, non-empty-string: non-negative-int|float} $value
     */
    public static function isAssocDuoOfUNum(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int|float, non-empty-string: positive-int|float} $value
     */
    public static function isAssocDuoOfPosNum(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: negative-int|float, non-empty-string: negative-int|float} $value
     */
    public static function isAssocDuoOfNegNum(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: string, non-empty-string: string} $value
     */
    public static function isAssocDuoOfStr(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function isAssocDuoOfStrLen(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function isAssocDuoOfRes(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: object, non-empty-string: object} $value
     */
    public static function isAssocDuoOfObj(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function isAssocDuoOfCls(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function isAssocDuoOfIfc(mixed $value): bool
    {
        return static::isAssocDuoOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function isAssocDuoOfObjOf(mixed $value, string $class): bool
    {
        return static::isAssocDuoOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function isAssocDuoOfClsOf(mixed $value, string $class): bool
    {
        return static::isAssocDuoOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
