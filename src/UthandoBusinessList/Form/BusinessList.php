<?php

namespace UthandoBusinessList\Form;

use Zend\Form\Form;

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
        ]);

        $this->add([
            'name' => 'telephone',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Telephone:',
            ],
        ]);

        $this->add([
            'name' => 'image',
            'type' => 'text',
            'attributes' => [
                'id' => 'business-list-image',
            ],
            'options'		=> [
                'label'	=> 'Image:',
            ],
        ]);

        $this->add([
            'name' => 'location',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Location:',
            ],
        ]);

        $this->add([
            'name' => 'company',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Company:',
            ],
        ]);

        $this->add([
            'name' => 'website',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Website:',
            ],
        ]);

        $this->add([
            'name' => 'sector',
            'type' => 'text',
            'options'		=> [
                'label'	=> 'Sector:',
            ],
        ]);

        $this->add([
            'name' => 'text',
            'type' => 'textarea',
            'options'		=> [
                'label'	=> 'Text:',
            ],
            'attributes'    => [
                'id'    => 'business-content-textarea',
            ]
        ]);
    }
};