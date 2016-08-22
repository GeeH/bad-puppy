<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Service\DataService;
use Zend\Filter\StaticFilter;
use Zend\Filter\ToInt;
use Zend\I18n\Filter\Alpha;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;


// module/Application/src/Application/Controller/IndexController.php
class IndexController extends AbstractActionController
{

    /**
     * @var DataService
     */
    private $dataService;

    public function __construct(DataService $dataService)
    {
        $this->dataService = $dataService;
    }

    public function indexAction()
    {
        $countries = $this->dataService->getAllCountries();
        return new ViewModel(['countries' => $countries]);
    }

    public function countryAction()
    {

        $code = StaticFilter::execute(
          $this->params()->fromRoute('code'),
          Alpha::class
        );

        $country = $this->dataService->getCountryByCode($codes);
        if ( is_null($country) ) {
            throw new \Exception('No Country Found for code ' . $code);
        }

        $cities = $this->dataService->getCitiesByCountryCode($code);

        return new ViewModel(
          [
            'country' => $country,
            'cities' => $cities,
          ]
        );

    }

    public function cityAction()
    {
        $id = StaticFilter::execute(
          $this->params()->fromRoute('id'),
          ToInt::class
        );

        $city = $this->dataService->getCityById($id);

        if ( is_null($city) ) {
            throw new \Exception('No City found with ID ' . $id);
        }

        $country = $this->dataService->getCountryByCode($city['CountryCode']);

        return new ViewModel(
          [
            'city' => $city,
            'country' => $country,
          ]
        );
    }
}
