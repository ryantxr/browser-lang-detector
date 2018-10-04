<?php namespace Ryantxr\BrowserPreferredLang;

/**
*  A sample class
*
*  Use this section to define what this class is doing, the PHPDocumentator will use this
*  to automatically generate an API documentation using this information.
*
*  @author yourname
*/
class PreferredLang
{

    /**
     * get
     *
     * Determines the preferred language from what the browser tells us.
     *
     * @param string $param1 A string containing the parameter, do this for each parameter to the function, make sure to make it descriptive
     *
     * @return string
     */
    public function get(array $availableLanguages, $httpAcceptLanguage)
    {
        $availableLanguages = array_flip($availableLanguages);
    
        $langs;
        preg_match_all('~([\w-]+)(?:[^,\d]+([\d.]+))?~', strtolower($httpAcceptLanguage), $matches, PREG_SET_ORDER);
        foreach ( $matches as $match ) {
    
            list($a, $b) = explode('-', $match[1]) + array('', '');
            $value = isset($match[2]) ? (float) $match[2] : 1.0;
    
            if ( isset($availableLanguages[$match[1]]) ) {
                $langs[$match[1]] = $value;
                continue;
            }
    
            if( isset($availableLanguages[$a]) ) {
                $langs[$a] = $value - 0.1;
            }
    
        }
        arsort($langs);
        return $langs;
    }
}