<?php

namespace Dropsmith\Hammersmith\Composer;

use Composer\Composer;
use Composer\IO\IOInterface;
use Composer\Package\Link;
use Composer\Plugin\PluginInterface;

class Plugin implements PluginInterface
{
    /**
     * @param Composer $composer
     * @param IOInterface $io
     */
    public function activate(Composer $composer, IOInterface $io)
    {
       // @todo Implement this.
    }
}
