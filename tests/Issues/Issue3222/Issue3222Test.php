<?php

declare(strict_types=1);

namespace Rector\Core\Tests\Issues\Issue3222;

use Iterator;
use Rector\Core\Testing\PHPUnit\AbstractRectorTestCase;
use Rector\Symfony\Rector\HttpKernel\GetRequestRector;

/**
 * Class Issue3222Test
 *
 * New lines at the end of a file
 */
final class Issue3222Test extends AbstractRectorTestCase
{
    /**
     * @dataProvider provideData()
     */
    public function test(string $filePath): void
    {
        $this->doTestFile($filePath);
    }

    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/Fixture');
    }

    protected function getRectorClass(): string
    {
        return GetRequestRector::class;
    }
}
