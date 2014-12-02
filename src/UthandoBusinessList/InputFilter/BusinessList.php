<?php

namespace UthandoBusinessList\InputFilter;

use Zend\InputFilter\InputFilter;

class BusinessList extends InputFilter
{
    public function init()
    {
        $this->add([
            'name' => 'businessListId',
            'required' => false,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
                ['name' => 'Digits']
            ],
        ]);

        $this->add([
            'name' => 'slug',
            'required' => true,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
                ['name' => 'UthandoSlug'],
            ],
            'validators'    => [
                ['name' => 'StringLength', 'options' => [
                    'encoding' => 'UTF-8',
                    'min' => 2,
                    'max' => 255
                ]],
            ],
        ]);

        $this->add([
            'name' => 'userId',
            'required' => true,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
                ['name' => 'Digits']
            ],
        ]);

        $this->add([
            'name' => 'telephone',
            'required' => false,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);

        $this->add([
            'name' => 'image',
            'required' => false,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);

        $this->add([
            'name' => 'location',
            'required' => false,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);

        $this->add([
            'name' => 'company',
            'required' => true,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);

        $this->add([
            'name' => 'website',
            'required' => false,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
            ],
        ]);

        $this->add([
            'name' => 'sector',
            'required' => false,
            'filters'       => [
                ['name' => 'StripTags'],
                ['name' => 'StringTrim'],
                ['name' => 'UthandoUcwords'],
            ],
        ]);

        $this->add([
            'name' => 'text',
            'required' => false,
        ]);
    }
} 