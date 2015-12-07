<?php
/**
 * Created by PhpStorm.
 * User: GeeH
 * Date: 19/10/2015
 * Time: 17:34
 */

namespace Application\Service;

use Application\Entities\City;
use Application\Entities\Country;
use Zend\Db\TableGateway\TableGateway;

class DataService
{
    /**
     * @var TableGateway
     */
    private $countryTable;
    /**
     * @var TableGateway
     */
    private $cityTable;

    public function __construct(TableGateway $countryTable, TableGateway $cityTable)
    {
        $this->countryTable = $countryTable;
        $this->cityTable = $cityTable;
    }



    /**
     * @return Country[]
     */
    public function getAllCountries()
    {
        $countries = $this->countryTable->select();
        $countries = iterator_to_array($countries);
        return $countries;
    }

    /**
     * @param $code
     * @return Country|null
     */
    public function getCountryByCode($code)
    {
        $country = $this->countryTable->select(['Code' => $code]);

        if ($country->count() < 1) {
            return null;
        }

        return $country->current();
    }

    /**
     * @param $code
     * @return City[]
     */
    public function getCitiesByCountryCode($code)
    {
        $cities = $this->cityTable->select(['CountryCode' => $code]);
        return $cities->current();
    }

    /**
     * @param $id
     * @return City|null
     */
    public function getCityById($id)
    {
        $city = $this->cityTable->select(['ID' => $id]);

        if ($city->count() < 1) {
            return null;
        }

        return $city->current();
    }
}