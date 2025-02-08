<?php declare(strict_types=1);

namespace VanCodX\Data\Validation\Exceptions\Interfaces;

interface ValueInfoInterface
{
    /**
     * @return string|list<string>|array<string, mixed>
     */
    public function getValueInfo(): string|array;
}
