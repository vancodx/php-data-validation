<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits\Interfaces;

interface FloatInterface
{
    public static function isFloat(mixed $value): bool;

    public static function isUFloat(mixed $value): bool;

    public static function isPosFloat(mixed $value): bool;

    public static function isNegFloat(mixed $value): bool;
}
