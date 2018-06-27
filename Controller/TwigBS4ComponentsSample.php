<?php
/**
 * File TwigBS4ComponentsSample.php
 *
 * @package       BSComponents4Twig
 * @subpackage    BSComponents4Twig
 * @autor         Francesc Pineda Segarra francesc.pineda.segarra@gmail.com
 * @copyright     Copyright (c) 2018
 */

namespace FacturaScripts\Plugins\BSComponents4Twig\Controller;

use FacturaScripts\Core\Base\Controller;

/**
 * Sample to use BootStrap elements as Twig components.
 *
 * @author Francesc Pineda Segarra <francesc.pineda@x-netdigital.com>
 */
class TwigBS4ComponentsSample extends Controller
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
        $pageData['title'] = 'bs4-components-twig';
        $pageData['icon'] = 'fa-magic';

        return $pageData;
    }
}
