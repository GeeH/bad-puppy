<?php
/**
 * Created by PhpStorm.
 * User: GeeH
 * Date: 19/10/2015
 * Time: 19:01
 */

namespace Application\ViewHelper;


use Application\Entities\Country;
use Zend\View\Helper\HelperInterface;
use Zend\View\Renderer\RendererInterface as Renderer;

class CountryName implements HelperInterface
{

    /**
     * @var Renderer
     */
    private $view;

    public function  __invoke(Country $country)
    {
        return '<a href="'
         . $this->getView()->url(
            'country',
            ['code' => $country->getCode()])
         . '">'
         . $country->getName()
         .'</a>';
    }

    /**
     * Set the View object
     *
     * @param  Renderer $view
     * @return HelperInterface
     */
    public function setView(Renderer $view)
    {
        $this->view = $view;
    }

    /**
     * Get the View object
     *
     * @return Renderer
     */
    public function getView()
    {
        return $this->view;
    }
}