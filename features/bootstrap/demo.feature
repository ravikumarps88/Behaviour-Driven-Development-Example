
Feature: demo
    In order to display the weather of a country
    As anybody
    I need to provide the country name and api url

Scenario: Display the weather of a country
    Given I have the country name "United States" and the api url "http://www.webservicex.net/globalweather.asmx?WSDL"
    When I call the api url with country name
    Then the response array contains "Success"