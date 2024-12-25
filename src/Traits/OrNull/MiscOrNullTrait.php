<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\OrNull;

trait MiscOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true resource|null $value
     */
    public static function isResOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isRes($value);
    }
}
