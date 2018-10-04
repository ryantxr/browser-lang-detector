<?php 
use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author ryan teixeira
*/
class BrowserPreferredLangTest extends TestCase
{
	
    /**
     * Just check if the YourClass has no syntax error 
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testIsThereAnySyntaxError()
    {
        $var = new Ryantxr\BrowserPreferredLang\PreferredLang;
        $this->assertTrue(is_object($var));
        unset($var);
    }
     
    /**
     * Just check if the YourClass has no syntax error 
     *
     * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
     * any typo before you even use this library in a real project.
     *
     */
    public function testMethod1()
    {
        $obj = new Ryantxr\BrowserPreferredLang\PreferredLang;
        $availableLanguages = ["en", "zh-cn", "es"];
        $httpAcceptLanguage = 'en-us,en;q=0.8,es-cl;q=0.5,zh-cn;q=0.3';
        $langs = $obj->get($availableLanguages, $httpAcceptLanguage);
        print_r($langs);
        $this->assertTrue(! empty($langs));
        $this->assertTrue(array_key_exists('en', $langs));
    } 
}
