<?php

namespace Bbd\BongoCricketBundle\Entity;

/**
 * Cricket
 */
class Cricket
{

    public static function getmatchType()
    {
        return array('full-time' => 'Full time', 'part-time' => 'Part time', 'freelance' => 'Freelance');
    }

    public static function getmatchTypeValues()
    {
        return array_keys(self::getmatchType());
    }

}

