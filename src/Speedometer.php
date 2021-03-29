<?php

class Speedometer
{
    const KM_MI_COEFF = 0.621;
    const MI_KM_COEFF = 1.609;

    /**
     * Convert km/h to mi/h
     * @param int $km
     * @return float $mi
     */
    public static function convertKmtoMiles(int $km):float
    {
        $mi = $km * self::KM_MI_COEFF;

        return $mi;
    }

    /**
     * Convert km/h to mi/h
     * @param int $mi
     * @return float $km
     */
    public static function convertMilestoKm(int $mi):float
    {
        $km = $mi * self::MI_KM_COEFF;

        return $mi;
    }
}
