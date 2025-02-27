<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\Basic;

trait ObjTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true object $value
     */
    public static function isObj(mixed $value): bool
    {
        return is_object($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true class-string $value
     */
    public static function isCls(mixed $value): bool
    {
        return static::isStrLen($value) && class_exists($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true class-string $value
     */
    public static function isIfc(mixed $value): bool
    {
        return static::isStrLen($value) && interface_exists($value);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true TObject $value
     */
    public static function isObjOf(mixed $value, string $class): bool
    {
        return static::isObj($value) && ($value instanceof $class);
    }

    /**
     * @template TObject of object
     * @param mixed $value
     * @param class-string<TObject> $class
     * @return bool
     * @phpstan-assert-if-true class-string<TObject> $value
     */
    public static function isClsOf(mixed $value, string $class): bool
    {
        return static::isCls($value) && is_a($value, $class, true);
    }
}
