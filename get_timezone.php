<?php
/**
   * Attempts to find the closest timezone by coordinates
   *
   * @static
   * @param $lat
   * @param $lng
   */
  public static function getClosestTimezone($lat, $lng)
  {
    $diffs = array();
    foreach(DateTimeZone::listIdentifiers() as $timezoneID) {
      $timezone = new DateTimeZone($timezoneID);
      $location = $timezone->getLocation();
      $tLat = $location['latitude'];
      $tLng = $location['longitude'];
      $diffLat = abs($lat - $tLat);
      $diffLng = abs($lng - $tLng);
      $diff = $diffLat + $diffLng;
      $diffs[$timezoneID] = $diff;

    }

    //asort($diffs);
    $timezone = array_keys($diffs, min($diffs));


    return $timezone[0];

  }
  
  getClosestTimezone($33.5680614, $-112.2208674)
  $>