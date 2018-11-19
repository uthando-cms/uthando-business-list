<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoBusinessList\InputFilter
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2014 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */
namespace UthandoBusinessList\InputFilter;

use UthandoCommon\Filter\Slug;
use UthandoCommon\Filter\Ucwords;
use Zend\Filter\Digits;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\InputFilter;
use Zend\Validator\StringLength;

/**
 * Class BusinessList
 *
 * @package UthandoBusinessList\InputFilter
 */
class BusinessListInputFilter extends InputFilter
{
    public function init()
    {
        $this->add([
            'name' => 'businessListId',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
                ['name' => Digits::class]
            ],
        ]);

        $this->add([
            'name' => 'slug',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
                ['name' => Slug::class],
            ],
            'validators' => [
                ['name' => StringLength::class, 'options' => [
                    'encoding' => 'UTF-8',
                    'min' => 2,
                    'max' => 255
                ]],
            ],
        ]);

        $this->add([
            'name' => 'userId',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
                ['name' => Digits::class]
            ],
        ]);

        $this->add([
            'name' => 'telephone',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
        ]);

        $this->add([
            'name' => 'image',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
        ]);

        $this->add([
            'name' => 'location',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
        ]);

        $this->add([
            'name' => 'company',
            'required' => true,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
        ]);

        $this->add([
            'name' => 'website',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
        ]);

        $this->add([
            'name' => 'sector',
            'required' => false,
            'filters' => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
                ['name' => Ucwords::class],
            ],
        ]);

        $this->add([
            'name' => 'text',
            'required' => false,
        ]);
    }
}
