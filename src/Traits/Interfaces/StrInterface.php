<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits\Interfaces;

interface StrInterface
{
    public static function isStr(mixed $value): bool;

    public static function isStrLen(mixed $value): bool;

    public static function isEmptyStr(mixed $value): bool;
}
