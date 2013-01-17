<?php
/**
 * Zippopotam.us PHP Library
 *
 * @version 1.0.0
 */

namespace Zippopotamus\Service;

use Zend\Http\Client;
use Zend\Http\Headers;
use Zend\Json\Json;

final class Zippopotamus
{
    static public function code($countryCode, $postalCode)
    {
        $http = new Client();

        $http->setOptions(array('sslverifypeer' => false));
        $headers = new Headers();
        $headers->addHeaderLine('Content-Type', 'application/json');
        $http->setHeaders($headers);

        $http->setUri('http://api.zippopotam.us/' . urlencode($countryCode) . '/' . urlencode($postalCode));
        $http->setMethod('GET');

        $response = $http->send();
        $json = Json::decode($response->getBody());

        return $json;
    }

    static public function place($countryCode, $stateCode, $city)
    {
        $http = new Client();

        $http->setOptions(array('sslverifypeer' => false));
        $headers = new Headers();
        $headers->addHeaderLine('Content-Type', 'application/json');
        $http->setHeaders($headers);

        $http->setUri('http://api.zippopotam.us/'
            . urlencode($countryCode) . '/'
            . urlencode($stateCode) . '/'
            . urlencode($city)
            );
        $http->setMethod('GET');

        $response = $http->send();
        $json = Json::decode($response->getBody());

        return $json;
    }

    static public function nearby($countryCode, $postalCode)
    {
        $http = new Client();

        $http->setOptions(array('sslverifypeer' => false));
        $headers = new Headers();
        $headers->addHeaderLine('Content-Type', 'application/json');
        $http->setHeaders($headers);

        $http->setUri('http://api.zippopotam.us/nearby/' . urlencode($countryCode) . '/' . urlencode($postalCode));
        $http->setMethod('GET');

        $response = $http->send();
        $json = Json::decode($response->getBody());

        return $json;
    }
}
