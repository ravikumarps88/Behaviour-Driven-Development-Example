<?php

use Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;
use AppBundle\Services\SoapClientApi;

/*
 * This Class is used to test the DemoController->indexAction.
 * This only works in the older version of behat(ie, behat 2.5).
 * So if you want to test this, need to change the version in conposer.json file and update the composer.
 * Corresponding feature is "demo.feature".
 */
class FeatureContext extends BehatContext
{
    private $countryName;
    private $apiUrl;
    private $city;
    private $response;

    const SOAPAPIPARAM = 'GetWeather';

    /**
     * @Given /^I have the country name "([^"]*)" and the api url "([^"]*)"$/
     */
    public function iHaveTheCountryNameAndTheApiUrl($arg1, $arg2)
    {
        $this->countryName = $arg1;
        $this->apiUrl = $arg2;
        $this->city = '';
    }

    /**
     * @When /^I call the api url with country name$/
     */
    public function iCallTheApiUrlWithCountryName()
    {
        $soapService = new SoapClientApi($this->apiUrl);
        $weatherarray = $soapService->soapClientCall($this->countryName, $this->city);

        $this->response = $weatherarray;
    }

    /**
     * @Then /^the response array contains "([^"]*)"$/
     */
    public function theResponseArrayContains($arg1)
    {
        if (is_array($this->response) && $this->response['Status'] == $arg1) {
            return $this->response;
        } else {
            throw new PendingException();
        }
    }

}
