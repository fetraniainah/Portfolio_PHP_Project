<?php
namespace Model;

class Geolocalisation {
    private static $longitude;
    private static $latitude;
    private static $city;
    private static $region;
    private static $country;
    private static $timeZone;
    
    public function __construct() {
        $data = file_get_contents('https://freegeoip.app/json/');
        if ($data !== false) {
            $location = json_decode($data);
            self::$longitude = $location->longitude;
            self::$latitude = $location->latitude;
            self::$city = $location->city;
            self::$region = $location->region_name;
            self::$country = $location->country_name;
            self::$timeZone = $location->time_zone;
        }
    }
    
    public static function getLongitude() {
        return self::$longitude;
    }
    
    public static function getLatitude() {
        return self::$latitude;
    }
    
    public static function getCity() {
        return self::$city;
    }
    
    public static function getRegion() {
        return self::$region;
    }
    
    public static function getCountry() {
        return self::$country;
    }
    
    public static function getTimeZone() {
        return self::$timeZone;
    }
}

