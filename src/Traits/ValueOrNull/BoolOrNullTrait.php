<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits\ValueOrNull;

trait BoolOrNullTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true bool|null $value
     */
    public static function isBoolOrNull(mixed $value): bool
    {
        return static::isNull($value) || static::isBool($value);
    }
}
