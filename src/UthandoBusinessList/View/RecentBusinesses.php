<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoBusinessList\View
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2014 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoBusinessList\View;

use UthandoCommon\View\AbstractViewHelper;

/**
 * Class RecentBusinesses
 *
 * @package UthandoBusinessList\View
 */
class RecentBusinesses extends AbstractViewHelper
{
    public function __invoke($number)
    {
        $service = $this->getServiceLocator()
            ->getServiceLocator()
            ->get('UthandoServiceManager')
            ->get('UthandoBusinessList');

        $models = $service->getRecentBusinesses($number);

        return $models;
    }
}
