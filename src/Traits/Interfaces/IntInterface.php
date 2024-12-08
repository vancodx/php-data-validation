<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits\Interfaces;

interface IntInterface
{
    public static function isInt(mixed $value): bool;

    public static function isUInt(mixed $value): bool;

    public static function isPosInt(mixed $value): bool;

    public static function isNegInt(mixed $value): bool;

    public static function isIntId(mixed $value): bool;
}
