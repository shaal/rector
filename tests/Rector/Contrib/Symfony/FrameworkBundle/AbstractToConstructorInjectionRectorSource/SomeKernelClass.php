<?php declare(strict_types=1);

namespace Rector\Tests\Rector\Contrib\Symfony\FrameworkBundle\AbstractToConstructorInjectionRectorSource;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Definition;
use Symfony\Component\HttpKernel\Kernel;

final class SomeKernelClass extends Kernel
{
    public function registerBundles(): iterable
    {
        return [];
    }

    public function registerContainerConfiguration(LoaderInterface $loader): void
    {
    }

    protected function build(ContainerBuilder $containerBuilder): void
    {
        $someServiceDefinition = $containerBuilder->register('some_service', 'stdClass');
        // so we can get it by the string name
        // @todo do this in own provider, not here, people will use private services
        $someServiceDefinition->setPublic(true);
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir() . '/_tmp';
    }

    public function getLogDir()
    {
        return sys_get_temp_dir() . '/_tmp';
    }
}
