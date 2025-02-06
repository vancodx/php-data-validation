<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use Exception;
use InvalidArgumentException;
use Throwable;

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
     * @param class-string<Exception> $class
     * @return void
     */
    public static function setArgumentExceptionClass(string $class): void
    {
        /** @phpstan-ignore staticMethod.alreadyNarrowedType */
        if (!static::isClsOf($class, Exception::class)) {
            throw new InvalidArgumentException('Argument "class" is invalid.');
        }
        static::$argumentExceptionClass = $class;
    }

    /**
     * @return string
     */
    public static function getSingularArgumentMessageFormat(): string
    {
        return static::$singularArgumentMessageFormat;
    }

    /**
     * @param string $format
     * @return void
     */
    public static function setSingularArgumentMessageFormat(string $format): void
    {
        if (!static::isStrLen($format)) {
            throw new InvalidArgumentException('Argument "format" is invalid.');
        }
        static::$singularArgumentMessageFormat = $format;
    }

    /**
     * @return string
     */
    public static function getPluralArgumentMessageFormat(): string
    {
        return static::$pluralArgumentMessageFormat;
    }

    /**
     * @param string $format
     * @return void
     */
    public static function setPluralArgumentMessageFormat(string $format): void
    {
        if (!static::isStrLen($format)) {
            throw new InvalidArgumentException('Argument "format" is invalid.');
        }
        static::$pluralArgumentMessageFormat = $format;
    }

    /**
     * @param string|list<string>|array<string, mixed> $arguments
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newArgumentException(
        string|array $arguments,
        int $code = 0,
        Throwable $previous = null
    ): Exception {
        if (static::isStrLen($arguments)) {
            $message = sprintf(static::getSingularArgumentMessageFormat(), $arguments);
        } elseif (static::isListLenOfStrLen($arguments)) {
            if (count($arguments) === 1) {
                $message = sprintf(static::getSingularArgumentMessageFormat(), $arguments[0]);
            } else {
                $message = sprintf(static::getPluralArgumentMessageFormat(), implode(', ', $arguments));
            }
        } elseif (static::isAssocLen($arguments)) {
            if (count($arguments) === 1) {
                $message = sprintf(static::getSingularArgumentMessageFormat(), array_key_first($arguments));
            } else {
                $message = sprintf(static::getPluralArgumentMessageFormat(), implode(', ', array_keys($arguments)));
            }
        } else {
            throw new InvalidArgumentException('Argument "arguments" is invalid.');
        }
        return new (static::getArgumentExceptionClass())($message, $code, $previous);
    }
}
