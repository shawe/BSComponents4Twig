<?php
/**
 * This file is part of plugin MiFactura for FacturaScripts
 * Copyright (C) 2018 X-Net Digital S.L. <jose.ramos@x-netdigital.com>
 */

namespace FacturaScripts\Plugins\BSComponents4Twig\Controller;

use FacturaScripts\Core\Base\Controller;

/**
 * Sample to use BootStrap elements as Twig components.
 *
 * @author Francesc Pineda Segarra <francesc.pineda@x-netdigital.com>
 */
class TwigBS3ComponentsSample extends Controller
{
    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'sample';
        $pageData['title'] = 'bs3-components-twig';
        $pageData['icon'] = 'fa-magic';

        return $pageData;
    }
}
