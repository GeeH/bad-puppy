<?php
/**
 * Created by PhpStorm.
 * User: GeeH
 * Date: 19/10/2015
 * Time: 19:33
 */

namespace Application\Entities;


class Country
{
    private $code;
    private $name;
    private $continent;
    private $region;
    private $surfaceArea;
    private $indepYear;
    private $population;
    private $lifeExpectancy;
    private $gNP;
    private $gNPOld;
    private $localName;
    private $governmentForm;
    private $headOfState;
    private $capital;
    private $code2;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getContinent()
    {
        return $this->continent;
    }

    /**
     * @param mixed $continent
     */
    public function setContinent($continent)
    {
        $this->continent = $continent;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @param mixed $region
     */
    public function setRegion($region)
    {
        $this->region = $region;
    }

    /**
     * @return mixed
     */
    public function getSurfaceArea()
    {
        return $this->surfaceArea;
    }

    /**
     * @param mixed $surfaceArea
     */
    public function setSurfaceArea($surfaceArea)
    {
        $this->surfaceArea = $surfaceArea;
    }

    /**
     * @return mixed
     */
    public function getIndepYear()
    {
        return $this->indepYear;
    }

    /**
     * @param mixed $indepYear
     */
    public function setIndepYear($indepYear)
    {
        $this->indepYear = $indepYear;
    }

    /**
     * @return mixed
     */
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @param mixed $population
     */
    public function setPopulation($population)
    {
        $this->population = $population;
    }

    /**
     * @return mixed
     */
    public function getLifeExpectancy()
    {
        return $this->lifeExpectancy;
    }

    /**
     * @param mixed $lifeExpectancy
     */
    public function setLifeExpectancy($lifeExpectancy)
    {
        $this->lifeExpectancy = $lifeExpectancy;
    }

    /**
     * @return mixed
     */
    public function getGNP()
    {
        return $this->gNP;
    }

    /**
     * @param mixed $gNP
     */
    public function setGNP($gNP)
    {
        $this->gNP = $gNP;
    }

    /**
     * @return mixed
     */
    public function getGNPOld()
    {
        return $this->gNPOld;
    }

    /**
     * @param mixed $gNPOld
     */
    public function setGNPOld($gNPOld)
    {
        $this->gNPOld = $gNPOld;
    }

    /**
     * @return mixed
     */
    public function getLocalName()
    {
        return $this->localName;
    }

    /**
     * @param mixed $localName
     */
    public function setLocalName($localName)
    {
        $this->localName = $localName;
    }

    /**
     * @return mixed
     */
    public function getGovernmentForm()
    {
        return $this->governmentForm;
    }

    /**
     * @param mixed $governmentForm
     */
    public function setGovernmentForm($governmentForm)
    {
        $this->governmentForm = $governmentForm;
    }

    /**
     * @return mixed
     */
    public function getHeadOfState()
    {
        return $this->headOfState;
    }

    /**
     * @param mixed $headOfState
     */
    public function setHeadOfState($headOfState)
    {
        $this->headOfState = $headOfState;
    }

    /**
     * @return mixed
     */
    public function getCapital()
    {
        return $this->capital;
    }

    /**
     * @param mixed $capital
     */
    public function setCapital($capital)
    {
        $this->capital = $capital;
    }

    /**
     * @return mixed
     */
    public function getCode2()
    {
        return $this->code2;
    }

    /**
     * @param mixed $code2
     */
    public function setCode2($code2)
    {
        $this->code2 = $code2;
    }


}