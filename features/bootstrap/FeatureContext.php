<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

use Behat\MinkExtension\Context\MinkContext;
use Behat\Behat\Context\SnippetAcceptingContext;

use Tests\TestCase as TC;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context, SnippetAcceptingContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @When I want to check if I currently on the homepage
    */
    public function iWantToCheckIfICurrentlyOnTheHomepage()
    {
        $currentUrl = $this->getSession()->getCurrentUrl();
        $this->visitPath('/');
        $homepageUrl = $this->getSession()->getCurrentUrl();
        TC::assertEquals($currentUrl, $homepageUrl);
    }
}
