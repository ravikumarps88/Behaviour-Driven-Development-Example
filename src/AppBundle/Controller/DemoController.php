<?php

/**
 * Handles the soap call for given country name or city name
 *
 * @package AppBundle\Controller
 * @author Ravikumar P S <ravikumarps88@yahoo.co.in>
 */

namespace AppBundle\Controller;

use BeSimple\SoapBundle\ServiceDefinition\Annotation as Soap;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use BeSimple\SoapClient\SoapClient;

/**
 * Class DemoController
 *
 * @package AppBundle\Controller
 */
class DemoController extends Controller {

    const SOAPAPIPARAM = 'GetWeather';
    
    /**
     * creates form using createFormBuilder
     * uses BeSimple Bundle for soap api call
     * @return array of weather details
     */
    public function indexAction() {

        $country = 'United States';
        $city = '';

        $soapService = $this->get('api.weather.handler');
        $weatherarray = $soapService->soapClientCall($country,$city);

        echo "<pre>";
        print_r($weatherarray);
        exit;
        return $this->render(
                 'AppBundle:Demo:index.html.twig',
                 array('weather' => $responseArray)
            );
    }

}
