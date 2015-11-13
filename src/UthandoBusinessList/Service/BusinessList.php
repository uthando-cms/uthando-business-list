<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoBusinessList\Service
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2014 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */
namespace UthandoBusinessList\Service;

use UthandoCommon\Service\AbstractMapperService;

/**
 * Class BusinessList
 *
 * @package UthandoBusinessList\Service
 */
class BusinessList extends AbstractMapperService
{
    protected $serviceAlias = 'UthandoBusinessList';

    /**
     * @param $slug
     * @param null|int $userId
     * @return array|\ArrayObject|null|object
     */
    public function getBusinessBySlug($slug, $userId = null)
    {
        $slug = (string)$slug;
        /* @var $mapper \UthandoBusinessList\Mapper\BusinessList */
        $mapper = $this->getMapper();
        return $mapper->getBusinessBySlug($slug, $userId);
    }

    /**
     * @param $limit
     * @return \Zend\Db\ResultSet\HydratingResultSet|\Zend\Db\ResultSet\ResultSet|\Zend\Paginator\Paginator
     */
    public function getRecentBusinesses($limit)
    {
        $limit = (int)$limit;
        /* @var $mapper \UthandoBusinessList\Mapper\BusinessList */
        $mapper = $this->getMapper();
        return $mapper->getBusinessesByDate($limit);
    }
}
