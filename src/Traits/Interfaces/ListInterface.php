<?php declare(strict_types=1);

namespace VanCodX\Data\Validator\Traits\Interfaces;

interface ListInterface
{
    public static function isList(mixed $value): bool;

    public static function isListLen(mixed $value): bool;

    public static function isEmptyList(mixed $value): bool;
}
