<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Exceptions\Traits;

use InvalidArgumentException;
use VanCodX\Data\Validation\Validation as V;

trait PrepareMessageTrait
{
    /**
     * @param string $singularFormat
     * @param string $pluralFormat
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @param string $nameSeparator [optional]
     * @return string
     */
    protected static function prepareMessage(
        string $singularFormat,
        string $pluralFormat,
        string|array $valueInfo,
        string $nameSeparator = ', '
    ): string {
        if (!V::isStrLen($singularFormat)) {
            throw new InvalidArgumentException('Argument "singularFormat" is invalid.');
        } elseif (!V::isStrLen($pluralFormat)) {
            throw new InvalidArgumentException('Argument "pluralFormat" is invalid.');
        } elseif (!V::isStrLen($nameSeparator)) {
            throw new InvalidArgumentException('Argument "nameSeparator" is invalid.');
        }
        $names = static::prepareNames($valueInfo);
        if (count($names) === 1) {
            return sprintf($singularFormat, $names[0]);
        } else {
            return sprintf($pluralFormat, implode($nameSeparator, $names));
        }
    }

    /**
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @return list<string>
     */
    protected static function prepareNames(string|array $valueInfo): array
    {
        if (V::isStrLen($valueInfo)) {
            return [$valueInfo];
        } elseif (V::isListLenOfStrLen($valueInfo)) {
            return $valueInfo;
        } elseif (V::isAssocLen($valueInfo)) {
            return array_keys($valueInfo);
        } else {
            throw new InvalidArgumentException('Argument "valueInfo" is invalid.');
        }
    }
}
