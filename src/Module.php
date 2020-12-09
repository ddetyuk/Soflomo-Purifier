<?php
/**
 * @license See the file LICENSE for copying permission.
 */

namespace Soflomo\Purifier;

use Laminas\ModuleManager\Feature;

class Module implements Feature\ConfigProviderInterface
{
    const VERSION = '2.0.1-dev';

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
