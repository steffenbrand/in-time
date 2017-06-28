<?php

namespace SteffenBrand\InTime;

/**
 * Formulas to convert hours to minutes, seconds, milliseconds and microseconds.
 *
 * @package SteffenBrand\InTime
 */
class Hours
{
    const IN_MINUTES = 60;
    const IN_SECONDS = self::IN_MINUTES * 60;
    const IN_MILLISECONDS = self::IN_SECONDS * 1000;
    const IN_MICROSECONDS = self::IN_MILLISECONDS * 1000;
}