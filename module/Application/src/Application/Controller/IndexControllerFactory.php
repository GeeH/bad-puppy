<?php
/**
 * Created by PhpStorm.
 * User: GeeH
 * Date: 19/10/2015
 * Time: 19:20
 */

namespace Application\Controller;


use Application\Service\DataService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class IndexControllerFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $dataService = $serviceLocator->getServiceLocator()->get(DataService::class);
        return new IndexController($dataService);
    }
}