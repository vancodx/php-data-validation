<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use Exception;
use InvalidArgumentException;

trait ArgumentExceptionTrait
{
    /**
     * @var class-string<Exception>
     */
    protected static string $argumentExceptionClass = InvalidArgumentException::class;

    /**
     * @var string
     */
    protected static string $singularArgumentMessageFormat = 'Argument "%s" is invalid.';

    /**
     * @var string
     */
    protected static string $pluralArgumentMessageFormat = 'One or more arguments (%s) are invalid.';

    /**
     * @return class-string<Exception>
     */
    public static function getArgumentExceptionClass(): string
    {
        return static::$argumentExceptionClass;
    }

    /**
     * @return string
     */
    public static function getSingularArgumentMessageFormat(): string
    {
        return static::$singularArgumentMessageFormat;
    }

    /**
     * @return string
     */
    public static function getPluralArgumentMessageFormat(): string
    {
        return static::$pluralArgumentMessageFormat;
    }

    /**
     * @param string|array<string, mixed> $nameOrValues
     * @return Exception
     */
    public static function newArgumentException(string|array $nameOrValues): Exception
    {
        if (static::isStrLen($nameOrValues)) {
            $message = sprintf(static::getSingularArgumentMessageFormat(), $nameOrValues);
        } elseif (static::isAssocLen($nameOrValues)) {
            if (count($nameOrValues) === 1) {
                $message = sprintf(static::getSingularArgumentMessageFormat(), array_key_first($nameOrValues));
            } else {
                $message = sprintf(static::getPluralArgumentMessageFormat(), implode(', ', array_keys($nameOrValues)));
            }
        } else {
            throw new InvalidArgumentException('Argument "nameOrValues" is invalid.');
        }
        $argumentExceptionClass = static::getArgumentExceptionClass();
        return new $argumentExceptionClass($message);
    }
}
