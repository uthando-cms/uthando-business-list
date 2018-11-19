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

use TwbBundle\Form\View\Helper\TwbBundleForm;
use UthandoUser\Form\Element\UserList;
use Zend\Form\Element\Button;
use Zend\Form\Element\Hidden;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Element\Url;
use Zend\Form\Form;

/**
 * Class BusinessList
 *
 * @package UthandoBusinessList\Form
 */
class BusinessListForm extends Form
{
    public function init()
    {
        $this->add([
            'name' => 'businessListId',
            'type' => Hidden::class,
        ]);

        $this->add([
            'name' => 'slug',
            'type' => Hidden::class,
        ]);

        $this->add([
            'name' => 'userId',
            'type' => UserList::class,
            'options' => [
                'label' => 'User',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
        ]);

        $this->add([
            'name' => 'telephone',
            'type' => Text::class,
            'options' => [
                'label' => 'Telephone',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placehoder' => 'Telephone',
            ],
        ]);

        $this->add([
            'name' => 'image',
            'type' => Text::class,
            'attributes' => [
                'placehoder' => 'Image',
                'id' => 'business-list-image',
            ],
            'options' => [
                'label' => 'Image',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
                'add-on-append' => new Button('business-list-image-button', [
                    'label' => 'Add Image',
                ]),
            ],
        ]);

        $this->add([
            'name' => 'location',
            'type' => Text::class,
            'options' => [
                'label' => 'Location',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placehoder' => 'Location',
            ],
        ]);

        $this->add([
            'name' => 'company',
            'type' => Text::class,
            'options' => [
                'label' => 'Company',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placehoder' => 'Company',
            ],
        ]);

        $this->add([
            'name' => 'website',
            'type' => Url::class,
            'options' => [
                'label' => 'Website',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'Website',
            ],
        ]);

        $this->add([
            'name' => 'sector',
            'type' => Text::class,
            'options' => [
                'label' => 'Sector',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'Sector',
            ],
        ]);

        $this->add([
            'name' => 'text',
            'type' => Textarea::class,
            'options' => [
                'label' => 'Text',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
            'attributes' => [
                'placeholder' => 'Text',
                'class'       => 'editable-textarea',
                'id'          => 'business-list-content-textarea',
                'rows'        => 25,
            ],
        ]);
    }
}
