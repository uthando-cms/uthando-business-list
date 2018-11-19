<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoBusinessList\Mapper
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2014 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */
namespace UthandoBusinessList\Mapper;

use UthandoCommon\Mapper\AbstractDbMapper;

/**
 * Class BusinessList
 *
 * @package UthandoBusinessList\Mapper
 */
class BusinessListMapper extends AbstractDbMapper
{
    protected $table = 'businessList';
    protected $primary = 'businessListId';

    /**
     * @param $slug
     * @param null|int $userId
     * @return array|\ArrayObject|null|object
     */
    public function getBusinessBySlug($slug, $userId = null)
    {
        $select = $this->getSelect();
        $select->where(['slug' => $slug]);

        if ($userId) {
            $select->where->equalTo('userId', $userId);
        }

        $rowSet = $this->fetchResult($select);
        $row = $rowSet->current();

        return $row;
    }

    /**
     * @param $limit
     * @return \Zend\Db\ResultSet\HydratingResultSet|\Zend\Db\ResultSet\ResultSet|\Zend\Paginator\Paginator
     */
    public function getBusinessesByDate($limit)
    {
        $select = $this->getSelect();
        $select = $this->setLimit($select, $limit, 0);
        $select = $this->setSortOrder($select, '-dateCreated');

        $rowSet = $this->fetchResult($select);

        return $rowSet;
    }
}
