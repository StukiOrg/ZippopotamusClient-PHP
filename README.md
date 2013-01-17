Zippopotamus PHP Library
================================
A library to abstract the Zippopotamus API

Installation
------------
  1. edit `composer.json` file with following contents:

     ```json
     "require": {
        "zippopotamus/zippopotamus": "dev-master"
     }
     ```
  2. install composer via `curl -s http://getcomposer.org/installer | php` (on windows, download
     http://getcomposer.org/installer and execute it with PHP)
  3. run `php composer.phar install`

Use
---

```php
use Zippopotamus\Service\Zippopotamus;

$result = Zippopotamus::postalCode($countryCode, $postalCode);

$result = Zippopotamus::place($countryCode, $state, $city);

$result = Zippopotamus::nearby($countryCode, $postalCode);
```
