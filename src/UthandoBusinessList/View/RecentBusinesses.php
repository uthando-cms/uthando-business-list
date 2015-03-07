<?php

namespace UthandoBusinessList\View;

use UthandoCommon\View\AbstractViewHelper;

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