<?php

declare(strict_types=1);

namespace Rector\PHPUnit\Tests\Rector\Class_\RemoveDataProviderTestPrefixRector;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\PHPUnit\Rector\Class_\RemoveDataProviderTestPrefixRector;

final class RemoveDataProviderTestPrefixRectorTest extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $file): void
    {
        $this->doTestFile($file);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return RemoveDataProviderTestPrefixRector::class;
    }
}
