<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoBusinessList\Event
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2014 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */
namespace UthandoBusinessList\Event;

use UthandoBusinessList\Service\BusinessListService;
use Zend\EventManager\Event;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\ListenerAggregateTrait;

/**
 * Class ServiceListener
 *
 * @package UthandoBusinessList\Event
 */
class ServiceListener implements ListenerAggregateInterface
{
    use ListenerAggregateTrait;

    public function attach(EventManagerInterface $events)
    {
        $events = $events->getSharedManager();

        $this->listeners[] = $events->attach([
            BusinessListService::class
        ], ['pre.form'], [$this, 'setBusinessSlug']);
    }

    public function setBusinessSlug(Event $e)
    {
        $data = $e->getParam('data');

        if (!$data['slug']) {
            $data['slug'] = $data['company'];
        }

        $e->setParam('data', $data);
    }
}
