<?php declare(strict_types=1);

namespace Tests\Unit;

use InvalidArgumentException;
use PHPUnit\Framework\Attributes\DataProvider;
use ReflectionClass;
use ReflectionMethod;
use VanCodX\Data\Validation\Validation as V;
use VanCodX\Testing\PHPUnit\TestCase;

class DocBlockTagTest extends TestCase
{
    /**
     * @var array<string, string|null>
     */
    protected static array $basicTypeMap = [
        // Bool
        'Bool' => 'bool',
        'True' => 'true',
        'False' => 'false',
        // Int
        'Int' => 'int',
        'UInt' => 'non-negative-int',
        'PosInt' => 'positive-int',
        'NegInt' => 'negative-int',
        'IntId' => 'positive-int',
        // Float
        'Float' => 'float',
        'UFloat' => 'float',
        'PosFloat' => 'float',
        'NegFloat' => 'float',
        // Num
        'Num' => 'int|float',
        'UNum' => null,
        'PosNum' => null,
        'NegNum' => null,
        // Str
        'Str' => 'string',
        'StrLen' => 'non-empty-string',
        'EmptyStr' => '\'\'',
        // Misc
        'Null' => 'null',
        'Res' => 'resource',
        // Arr
        'EmptyArr' => 'array{}',
        // List
        'EmptyList' => 'array{}',
        // Assoc
        'EmptyAssoc' => 'array{}',
        // Obj
        'Obj' => 'object',
        'Cls' => 'class-string',
        'Ifc' => 'class-string',
        'ObjOf' => 'TObject',
        'ClsOf' => 'class-string<TObject>'
    ];

    /**
     * @var array<string, array<string, string>>
     */
    protected static array $arrayTypeSizeMap = [
        'Arr' => [
            'Def' => 'array<%TYPE%>',
            'Len' => 'non-empty-array<%TYPE%>',
            'Solo' => 'array{%TYPE%}',
            'Duo' => 'array{%TYPE%, %TYPE%}',
            'Trio' => 'array{%TYPE%, %TYPE%, %TYPE%}',
            'Quad' => 'array{%TYPE%, %TYPE%, %TYPE%, %TYPE%}'
        ],
        'List' => [
            'Def' => 'list<%TYPE%>',
            'Len' => 'non-empty-list<%TYPE%>',
            'Solo' => 'array{0: %TYPE%}',
            'Duo' => 'array{0: %TYPE%, 1: %TYPE%}',
            'Trio' => 'array{0: %TYPE%, 1: %TYPE%, 2: %TYPE%}',
            'Quad' => 'array{0: %TYPE%, 1: %TYPE%, 2: %TYPE%, 3: %TYPE%}'
        ],
        'Assoc' => [
            // phpcs:disable Generic.Files.LineLength
            'Def' => 'array<non-empty-string, %TYPE%>',
            'Len' => 'non-empty-array<non-empty-string, %TYPE%>',
            'Solo' => 'array{non-empty-string: %TYPE%}',
            'Duo' => 'array{non-empty-string: %TYPE%, non-empty-string: %TYPE%}',
            'Trio' => 'array{non-empty-string: %TYPE%, non-empty-string: %TYPE%, non-empty-string: %TYPE%}',
            'Quad' => 'array{non-empty-string: %TYPE%, non-empty-string: %TYPE%, non-empty-string: %TYPE%, non-empty-string: %TYPE%}'
            // phpcs:enable
        ]
    ];

    /**
     * @return list<array{0: string, 1: string|null}>
     */
    public static function funcNameAndTypeDataProvider(): array
    {
        $methods = array_values(array_filter(
            (new ReflectionClass(V::class))->getMethods(ReflectionMethod::IS_STATIC | ReflectionMethod::IS_PUBLIC),
            static fn (ReflectionMethod $method): bool => str_starts_with($method->getName(), 'is')
        ));

        return array_map(static function (ReflectionMethod $method): array {
            $docComment = $method->getDocComment();
            return [
                $method->getName(),
                $docComment && preg_match('~@phpstan-assert-if-true (?<type>[^$]+) \$value\n~', $docComment, $match)
                    ? $match['type'] : null
            ];
        }, $methods);
    }

    /**
     * @param string $funcName
     * @param string|null $actualType
     * @return void
     */
    #[DataProvider('funcNameAndTypeDataProvider')]
    public function testDocBlockTag(string $funcName, ?string $actualType): void
    {
        $match = [];
        /** @var list<string> $patterns */
        static $patterns = [
            // phpcs:disable Generic.Files.LineLength
            '~^is(?<arrayType>Arr|List|Assoc)(?<arraySize>Len|Solo|Duo|Trio|Quad)?(?<orNull>OrNull)?$~',
            '~^is(?<arrayType>Arr|List|Assoc)(?<arraySize>Len|Solo|Duo|Trio|Quad)?(?<of>Of)(?<basicType>[[:alpha:]]+)?$~',
            '~^is(?<basicType>[[:alpha:]]+)(?<orNull>OrNull)?$~U'
            // phpcs:enable
        ];
        foreach ($patterns as $pattern) {
            if (preg_match($pattern, $funcName, $match)) {
                break;
            }
        }
        if (!count($match)) {
            throw new InvalidArgumentException('Argument "funcName" is invalid.');
        }

        $expectedType = null;
        if (array_key_exists('basicType', $match)) {
            $expectedType = static::$basicTypeMap[$match['basicType']];
            if ($expectedType && array_key_exists('orNull', $match)) {
                $expectedType .= '|null';
            }
        }

        if (array_key_exists('arrayType', $match)) {
            if (!$expectedType && !array_key_exists('of', $match)) {
                $expectedType = 'mixed';
            }
            if ($expectedType) {
                $arrayType = $match['arrayType'];
                $arraySize = (array_key_exists('arraySize', $match) ? $match['arraySize'] : '') ?: 'Def';
                $expectedType = str_replace('%TYPE%', $expectedType, static::$arrayTypeSizeMap[$arrayType][$arraySize]);
                if (array_key_exists('orNull', $match)) {
                    $expectedType .= '|null';
                }
            }
        }

        if ($expectedType) {
            $this->assertSame($expectedType, $actualType);
        } else {
            $this->assertNull($actualType);
        }
    }
}
