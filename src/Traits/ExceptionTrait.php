<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Traits;

use Exception;
use ReflectionProperty;
use Throwable;
use VanCodX\Data\Validation\Exceptions\ArgumentException;
use VanCodX\Data\Validation\Exceptions\ValueException;

trait ExceptionTrait
{
    /**
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newValueException(
        string|array $valueInfo,
        int $code = 0,
        Throwable $previous = null
    ): Exception {
        $exception = new ValueException($valueInfo, $code, $previous);
        static::fixExceptionFileAndLine($exception);
        return $exception;
    }

    /**
     * @param string|list<string>|array<string, mixed> $valueInfo
     * @param int $code [optional]
     * @param Throwable|null $previous [optional]
     * @return Exception
     */
    public static function newArgumentException(
        string|array $valueInfo,
        int $code = 0,
        Throwable $previous = null
    ): Exception {
        $exception = new ArgumentException($valueInfo, $code, $previous);
        static::fixExceptionFileAndLine($exception);
        return $exception;
    }

    /**
     * @param Exception $exception
     * @return void
     */
    protected static function fixExceptionFileAndLine(Exception $exception): void
    {
        $trace = $exception->getTrace();
        if (count($trace) >= 1) {
            $call = $trace[0];
            if (array_key_exists('file', $call) && array_key_exists('line', $call)) {
                (new ReflectionProperty($exception, 'file'))->setValue($exception, $call['file']);
                (new ReflectionProperty($exception, 'line'))->setValue($exception, $call['line']);
            }
        }
    }
}
