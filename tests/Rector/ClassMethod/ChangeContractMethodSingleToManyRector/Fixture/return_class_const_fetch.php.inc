<?php

namespace Rector\Core\Tests\Rector\ClassMethod\ChangeContractMethodSingleToManyRector\Fixture;

use Rector\Core\Tests\Rector\ClassMethod\ChangeContractMethodSingleToManyRector\Source\OneToManyInterface;

class ReturnClassConstFetch implements OneToManyInterface
{
    public function getNode(): string
    {
        return self::class;
    }
}

?>
-----
<?php

namespace Rector\Core\Tests\Rector\ClassMethod\ChangeContractMethodSingleToManyRector\Fixture;

use Rector\Core\Tests\Rector\ClassMethod\ChangeContractMethodSingleToManyRector\Source\OneToManyInterface;

class ReturnClassConstFetch implements OneToManyInterface
{
    /**
     * @return string[]
     */
    public function getNodes(): array
    {
        return [self::class];
    }
}

?>
