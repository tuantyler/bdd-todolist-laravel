Feature:
    In order to prove that Behat works as intended
    We want to test the home page for a phrase

    Scenario: Root Test
        When I am on the homepage
        Then I should see "Laravel"
        
    Scenario: Use my own test logic
        When I want to check if I currently on the homepage

    Scenario: Check if app homepage is accessible in todoapp route
        Given I am on "/todoapp"
        Then the response status code should be 200
        