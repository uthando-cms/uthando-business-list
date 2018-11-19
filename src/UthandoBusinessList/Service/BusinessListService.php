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

use UthandoBusinessList\Form\BusinessListForm;
use UthandoBusinessList\Hydrator\BusinessListHydrator;
use UthandoBusinessList\InputFilter\BusinessListInputFilter;
use UthandoBusinessList\Mapper\BusinessListMapper;
use UthandoBusinessList\Model\BusinessListModel;
use UthandoCommon\Service\AbstractMapperService;

/**
 * Class BusinessList
 *
 * @package UthandoBusinessList\Service
 */
class BusinessListService extends AbstractMapperService
{
    protected $form         = BusinessListForm::class;
    protected $hydrator     = BusinessListHydrator::class;
    protected $inputFilter  = BusinessListInputFilter::class;
    protected $mapper       = BusinessListMapper::class;
    protected $model        = BusinessListModel::class;

    /**
     * @param $slug
     * @param null|int $userId
     * @return array|\ArrayObject|null|object
     */
    public function getBusinessBySlug($slug, $userId = null)
    {
        $slug = (string)$slug;
        /* @var $mapper BusinessListMapper */
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
        /* @var $mapper BusinessListMapper */
        $mapper = $this->getMapper();
        return $mapper->getBusinessesByDate($limit);
    }
}
