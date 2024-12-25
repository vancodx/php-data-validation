<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait MiscTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true null $value
     */
    public static function isNull(mixed $value): bool
    {
        return is_null($value);
    }

    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true resource $value
     */
    public static function isRes(mixed $value): bool
    {
        return is_resource($value);
    }
}
