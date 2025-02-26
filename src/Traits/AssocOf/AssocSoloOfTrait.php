<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocSoloOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: mixed} $value
     */
    public static function isAssocSoloOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssocSolo($value)) {
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
     * @phpstan-assert-if-true array{non-empty-string: bool} $value
     */
    public static function isAssocSoloOfBool(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int} $value
     */
    public static function isAssocSoloOfInt(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-negative-int} $value
     */
    public static function isAssocSoloOfUInt(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int} $value
     */
    public static function isAssocSoloOfPosInt(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: negative-int} $value
     */
    public static function isAssocSoloOfNegInt(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int} $value
     */
    public static function isAssocSoloOfIntId(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float} $value
     */
    public static function isAssocSoloOfFloat(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float} $value
     */
    public static function isAssocSoloOfUFloat(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float} $value
     */
    public static function isAssocSoloOfPosFloat(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float} $value
     */
    public static function isAssocSoloOfNegFloat(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int|float} $value
     */
    public static function isAssocSoloOfNum(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-negative-int|float} $value
     */
    public static function isAssocSoloOfUNum(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int|float} $value
     */
    public static function isAssocSoloOfPosNum(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: negative-int|float} $value
     */
    public static function isAssocSoloOfNegNum(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: string} $value
     */
    public static function isAssocSoloOfStr(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-empty-string} $value
     */
    public static function isAssocSoloOfStrLen(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: resource} $value
     */
    public static function isAssocSoloOfRes(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: object} $value
     */
    public static function isAssocSoloOfObj(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string} $value
     */
    public static function isAssocSoloOfCls(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string} $value
     */
    public static function isAssocSoloOfIfc(mixed $value): bool
    {
        return static::isAssocSoloOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: TObject} $value
     */
    public static function isAssocSoloOfObjOf(mixed $value, string $class): bool
    {
        return static::isAssocSoloOf($value, static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string<TObject>} $value
     */
    public static function isAssocSoloOfClsOf(mixed $value, string $class): bool
    {
        return static::isAssocSoloOf($value, static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class));
    }
}
