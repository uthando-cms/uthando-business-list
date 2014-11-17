<?php

namespace UthandoBusinessList\View;

use UthandoCommon\View\AbstractViewHelper;

class RecentBusinesses extends AbstractViewHelper
{
    public function __invoke($number)
    {
        $service = $this->getServiceLocator()
            ->getServiceLocator()
            ->get('UthandoBusinessList\Service\BusinessList');

        $models = $service->getRecentBusinesses($number);

        return $models;
    }
}