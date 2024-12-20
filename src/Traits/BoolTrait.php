<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

trait BoolTrait
{
    /**
     * @param mixed $value
     * @return bool
     * @phpstan-assert-if-true bool $value
     */
    public static function isBool(mixed $value): bool
    {
        return is_bool($value);
    }
}
