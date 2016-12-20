<?php
/**
 * Created by PhpStorm.
 * User: Wart
 * Date: 19/12/2016
 * Time: 10:14
 */

namespace App;


class Utility
{

    public static function formatDate($date)
    {
        $returnDate = new \DateTime($date);
        return $returnDate->format('dmy');
    }

    public static function formatTime($time)
    {

        $returnTime = new \DateTime($time);
        return $returnTime->format('Gi');

    }


}