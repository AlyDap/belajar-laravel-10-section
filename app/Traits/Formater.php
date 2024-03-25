<?php

namespace App\Traits;

use DateTime;

// Pelaku aksi
trait Formatter
{
    public static function passDate(string $timestamp): string
    {
        // Convert the input string to a DateTime object
        $inputedDate = new DateTime($timestamp);
        $now = new DateTime();

        // Check if the date is today
        if ($inputedDate->format('Y-m-d') === $now->format('Y-m-d')) {
            return 'Hari ini, ' . $inputedDate->format('H:i');
        }

        // Check if the inputedDate is yesterday
        $yesterday = clone $now;
        $yesterday->modify('-1 day');
        if ($inputedDate->format('Y-m-d') === $yesterday->format('Y-m-d')) {
            return 'Kemarin, ' . $inputedDate->format('H:i');
        }

        // Return something like Minggu, 15 Agu 2005
        $formattedDate = self::$idDays[$inputedDate->format('w')] . ', ';
        $formattedDate .= $inputedDate->format('j ');
        $formattedDate .= self::$idMonths[$inputedDate->format('n') - 1];
        $formattedDate .= $inputedDate->format(' Y');
        return $formattedDate;
    }
}
