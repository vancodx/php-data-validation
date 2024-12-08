<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits\Interfaces;

interface MiscInterface
{
    public static function isNull(mixed $value): bool;

    public static function isTrue(mixed $value): bool;

    public static function isFalse(mixed $value): bool;
}
