<?php

namespace UthandoBusinessList\Hydrator;

use UthandoCommon\Hydrator\AbstractHydrator;
use UthandoCommon\Hydrator\Strategy\DateTime as DateTimeStrategy;

class BusinessList extends AbstractHydrator
{
    public function __construct()
    {
        parent::__construct();

        $dateTime = new DateTimeStrategy();

        $this->addStrategy('dateCreated', $dateTime);
        $this->addStrategy('dateModified', $dateTime);

        return $this;
    }

    /**
     *
     * @param $object \UthandoBusinessList\Model\BusinessList
     * @return array
     */
    public function extract($object)
    {
        return [
            'businessListId'    => $object->getBusinessListId(),
            'userId'            => $object->getUserId(),
            'company'           => $object->getCompany(),
            'slug'              => $object->getSlug(),
            'telephone'         => $object->getTelephone(),
            'image'             => $object->getImage(),
            'location'          => $object->getLocation(),
            'website'           => $object->getWebsite(),
            'sector'            => $object->getSector(),
            'text'              => $object->getText(),
            'dateCreated'       => $this->extractValue('dateCreated', $object->getDateCreated()),
            'dateModified'      => $this->extractValue('dateModified', $object->getDateModified())
        ];
    }
} 