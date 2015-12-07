<?php
/**
 * Created by PhpStorm.
 * User: GeeH
 * Date: 19/10/2015
 * Time: 18:03
 */

namespace Application\AbstractFactory;


use Zend\Db\Adapter\Adapter;
use Zend\Db\ResultSet\HydratingResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ServiceManager\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\Hydrator\ClassMethods;

class TableGatewayAbstractFactory implements AbstractFactoryInterface
{

    /**
     * Determine if we can create a service with name
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param $name
     * @param $requestedName
     * @return bool
     */
    public function canCreateServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        return fnmatch('*Table', $requestedName);
    }

    /**
     * Create service with name
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @param $name
     * @param $requestedName
     * @return mixed
     */
    public function createServiceWithName(ServiceLocatorInterface $serviceLocator, $name, $requestedName)
    {
        $tableName = str_replace('Table', '', $requestedName);
        $adapter = $serviceLocator->get(Adapter::class);

        $hydrator = new ClassMethods();
        $entityName = 'Application\Entities\\' . $tableName;

        $objectPrototype = new $entityName;

        $resultSet = new HydratingResultSet($hydrator, $objectPrototype);

        return new TableGateway($tableName, $adapter, null, $resultSet);
    }
}