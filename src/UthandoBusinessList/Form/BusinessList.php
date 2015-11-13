<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoBusinessList\Form
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2014 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */
namespace UthandoBusinessList\Form;

use Zend\Form\Form;

/**
 * Class BusinessList
 *
 * @package UthandoBusinessList\Form
 */
class BusinessList extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'businessListId',
            'type' => 'hidden',
        ]);

        $this->add([
            'name' => 'slug',
            'type' => 'hidden',
        ]);

        $this->add([
            'name' => 'userId',
            'type' => 'UthandoUserList',
            'options' => [
                'label' => 'User:'
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
        ]);

        $this->add([
            'name' => 'telephone',
            'type' => 'text',
            'options' => [
                'label' => 'Telephone:',
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
        ]);

        $this->add([
            'name' => 'image',
            'type' => 'text',
            'attributes' => [
                'id' => 'business-list-image',
                'class' => 'form-control',
            ],
            'options' => [
                'label' => 'Image:',
            ],
        ]);

        $this->add([
            'name' => 'location',
            'type' => 'text',
            'options' => [
                'label' => 'Location:',
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
        ]);

        $this->add([
            'name' => 'company',
            'type' => 'text',
            'options' => [
                'label' => 'Company:',
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
        ]);

        $this->add([
            'name' => 'website',
            'type' => 'Url',
            'options' => [
                'label' => 'Website:',
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
        ]);

        $this->add([
            'name' => 'sector',
            'type' => 'text',
            'options' => [
                'label' => 'Sector:',
            ],
            'attributes' => [
                'class' => 'form-control',
            ],
        ]);

        $this->add([
            'name' => 'text',
            'type' => 'textarea',
            'options' => [
                'label' => 'Text:',
            ],
            'attributes' => [
                'id' => 'business-content-textarea',
                'class' => 'form-control',
            ],
        ]);
    }
}
