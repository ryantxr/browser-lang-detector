Browser Preferred Lang
=========================

This class will take $_SERVER['HTTP_ACCEPT_LANGUAGE'] and convert it into a list of languages/locales.
The returned array is sorted by preference with the highest preference first in the list.

```php
use Ryantxr\\BrowserPreferredLang\PreferredLang;
$p = new PreferredLang;
$langs = $p->get(['en', 'zh-cn', 'es'], $_SERVER['HTTP_ACCEPT_LANGUAGE']);
print_r($langs);
```
