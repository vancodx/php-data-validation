<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits\Interfaces;

interface ArrInterface
{
    public static function isArr(mixed $value): bool;

    public static function isArrLen(mixed $value): bool;

    public static function isEmptyArr(mixed $value): bool;
}
