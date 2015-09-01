
Feature: get weather of a country
    In order to display the weather of a country
    As anybody
    I need to provide the country name and city name

Scenario: Show weather
    Given I am on "/weather"   
    Then I should see "Countryname"
    When I fill in "form[countryname]" with "<United States>"
    And I fill in "form[cityname]" with "New York"
    And I press "Search"
    Then I should see "Location Name"