<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits\Interfaces;

interface NumInterface
{
    public static function isNum(mixed $value): bool;

    public static function isUNum(mixed $value): bool;

    public static function isPosNum(mixed $value): bool;

    public static function isNegNum(mixed $value): bool;
}
