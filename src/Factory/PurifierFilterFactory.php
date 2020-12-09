<?php
/**
 * @license See the file LICENSE for copying permission.
 */

namespace Soflomo\Purifier\Factory;

use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Soflomo\Purifier\PurifierFilter;

class PurifierFilterFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $htmlPurifier = $container->get('HTMLPurifier');

        return new PurifierFilter($htmlPurifier, $options);
    }
}
