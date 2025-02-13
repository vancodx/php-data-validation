<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\AssocOf;

trait AssocTrioOfTrait
{
    /**
     * @param mixed $value
     * @param callable(mixed): bool $validator
     * @return bool
     */
    public static function isAssocTrioOf(mixed $value, callable $validator): bool
    {
        if (!static::isAssocTrio($value)) {
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
     * @phpstan-assert-if-true array{non-empty-string: bool, non-empty-string: bool, non-empty-string: bool} $value
     */
    public static function isAssocTrioOfBool(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isBool(...));
    }

    // ========== INT =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int, non-empty-string: int, non-empty-string: int} $value
     */
    public static function isAssocTrioOfInt(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-negative-int, non-empty-string: non-negative-int, non-empty-string: non-negative-int} $value
     */
    public static function isAssocTrioOfUInt(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isUInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function isAssocTrioOfPosInt(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isPosInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: negative-int, non-empty-string: negative-int, non-empty-string: negative-int} $value
     */
    public static function isAssocTrioOfNegInt(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isNegInt(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: positive-int, non-empty-string: positive-int, non-empty-string: positive-int} $value
     */
    public static function isAssocTrioOfIntId(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isIntId(...));
    }

    // ========== FLOAT ========================================================= //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: float, non-empty-string: float, non-empty-string: float} $value
     */
    public static function isAssocTrioOfFloat(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfUFloat(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isUFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfPosFloat(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isPosFloat(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfNegFloat(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isNegFloat(...));
    }

    // ========== NUM =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: int|float, non-empty-string: int|float, non-empty-string: int|float} $value
     */
    public static function isAssocTrioOfNum(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfUNum(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isUNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfPosNum(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isPosNum(...));
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public static function isAssocTrioOfNegNum(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isNegNum(...));
    }

    // ========== STR =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: string, non-empty-string: string, non-empty-string: string} $value
     */
    public static function isAssocTrioOfStr(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isStr(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: non-empty-string, non-empty-string: non-empty-string, non-empty-string: non-empty-string} $value
     */
    public static function isAssocTrioOfStrLen(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isStrLen(...));
    }

    // ========== MISC ========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: resource, non-empty-string: resource, non-empty-string: resource} $value
     */
    public static function isAssocTrioOfRes(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isRes(...));
    }

    // ========== OBJ =========================================================== //

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: object, non-empty-string: object, non-empty-string: object} $value
     */
    public static function isAssocTrioOfObj(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isObj(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function isAssocTrioOfCls(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isCls(...));
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string, non-empty-string: class-string, non-empty-string: class-string} $value
     */
    public static function isAssocTrioOfIfc(mixed $value): bool
    {
        return static::isAssocTrioOf($value, static::isIfc(...));
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: TObject, non-empty-string: TObject, non-empty-string: TObject} $value
     */
    public static function isAssocTrioOfObjOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        $validator = static fn (mixed $itemValue): bool => static::isObjOf($itemValue, $class);
        return static::isAssocTrioOf($value, $validator);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true array{non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>, non-empty-string: class-string<TObject>} $value
     */
    public static function isAssocTrioOfClsOf(mixed $value, string $class): bool
    {
        /** @var \Closure(mixed): bool $validator */
        $validator = static fn (mixed $itemValue): bool => static::isClsOf($itemValue, $class);
        return static::isAssocTrioOf($value, $validator);
    }
}
