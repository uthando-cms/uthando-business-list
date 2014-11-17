<?php
namespace UthandoBusinessList\Event;

use Zend\EventManager\Event;
use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\ListenerAggregateTrait;

class ServiceListener implements ListenerAggregateInterface
{
    use ListenerAggregateTrait;
    
    public function attach(EventManagerInterface $events)
    {
        $events = $events->getSharedManager();
        
        $this->listeners[] = $events->attach([
            'UthandoBusinessList\Service\Member'
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
