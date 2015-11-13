<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoBusinessList\Controller
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link      https://github.com/uthando-cms for the canonical source repository
 * @copyright Copyright (c) 2014 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoBusinessList\Controller;

use UthandoCommon\Controller\AbstractCrudController;
use UthandoBusinessList\Model\BusinessList as BusinessModel;
use Zend\Http\PhpEnvironment\Response;
use Zend\View\Model\ViewModel;
use Zend\Form\Form;

/**
 * Class BusinessList
 *
 * @package UthandoBusinessList\Controller
 */
class BusinessList extends AbstractCrudController
{
    protected $controllerSearchOverrides = array('sort' => 'company');
    protected $serviceName = 'UthandoBusinessList';
    protected $route = 'admin/business-list';
    protected $routes = [];

    public function viewAction()
    {
        $viewModel = new ViewModel([
            'models' => $this->getPaginatorResults(),
        ]);

        if ($this->getRequest()->isXmlHttpRequest()) {
            $viewModel->setTerminal(true);
        }

        return $viewModel;
    }

    public function viewBusinessAction()
    {
        $slug = $this->params()->fromRoute('business');

        $model = $this->getService()->getBusinessBySlug($slug);

        return [
            'model' => $model,
        ];
    }


    public function editBusinessAction()
    {
        $userId = $this->identity()->getUserId();
        $slug = $this->params()->fromRoute('business', null);

        $model = $this->getService()->getBusinessBySlug($slug, $userId);

        if (!$model instanceof BusinessModel) {
            return $this->redirect()->toRoute(
                'business', ['business' => $slug,]
            );
        }

        $url = $this->url()->fromRoute('business/edit', $this->params()->fromRoute());
        $prg = $this->prg($url, true);

        if ($prg instanceof Response) {
            // returned a response to redirect us
            return $prg;
        } elseif ($prg === false) {
            // this wasn't a POST request, but there were no params in the flash messenger
            // probably this is the first time the form was loaded
            return [
                'form' => $this->getService()->getForm($model),
                'model' => $model,
            ];
        }

        $result = $this->getService()->edit($model, $prg);

        if ($result instanceof Form) {

            $this->flashMessenger()->addInfoMessage(self::FORM_ERROR);

            return [
                'form' => $result,
                'model' => $model,
            ];
        }

        if ($result) {
            $this->flashMessenger()->addSuccessMessage('Your changes were saved.');
        } else {
            $this->flashMessenger()->addErrorMessage('Your changes could not be save due to database error.');
        }

        $model = $this->getService()->getById($model->getBusinessListId());

        return $this->redirect()->toRoute(
            'business', [
                'business' => $model->getSlug(),
            ]
        );
    }
} 