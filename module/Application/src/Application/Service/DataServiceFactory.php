<?php
/**
 * Created by PhpStorm.
 * User: GeeH
 * Date: 19/10/2015
 * Time: 19:24
 */

namespace Application\Service;


use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class DataServiceFactory implements FactoryInterface
{

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $countryTable = $serviceLocator->get('CountryTable');
        $cityTable = $serviceLocator->get('CityTable');
        return new DataService($countryTable, $cityTable);
    }
}