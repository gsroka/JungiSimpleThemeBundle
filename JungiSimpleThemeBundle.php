<?php
namespace Jungi\SimpleThemeBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Jungi\ThemeBundle\Core\SimpleThemeHolder;

/**
 * JungiSimpleThemeBundle
 *
 * @author Piotr Kugla <piku235@gmail.com>
 */
class JungiSimpleThemeBundle extends Bundle
{
    /**
     * (non-PHPdoc)
     * @see \Symfony\Component\HttpKernel\Bundle\Bundle::boot()
     */
    public function boot()
    {
        $loader = $this->container->get('jungi.theme.mapping.loader.xml');
        $loader->load(__DIR__ . '/Resources/config/theme.xml');
    }
}
