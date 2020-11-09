<?php

class Speedometer
{
    const ONEKILOMETRE = 1.609;
    const ONEMILES =  0.621;

    public static function convertKmToMiles(float $kilometre)
    {
        return $kilometre * self::ONEMILES;
    }

    public static function convertMilesToKm(float $miles)
    {
        return $miles * self::ONEKILOMETRE;
    }
}