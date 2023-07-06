<?php
namespace App\Helpers;

class AppHelper
{
  public static function sanitizeApartmentTitle($title)
  {
    $title = preg_replace('/[^A-Za-z0-9.\-]/', '', strtolower($title));
    return $title;
  }

  public static function sanitizeApartmentFloor($floor)
  {
    return strtolower($floor);
  }

  public static function apartmentCostsToDecimal($cost)
  {
    // return $cost as decimal nummber
    return number_format($cost, 2, '.', '');
  }
}