<?php

namespace SteffenBrand\InTime;

/**
 * Formulas to convert years to weeks, days, hours, minutes, seconds, milliseconds and microseconds.
 *
 * @package SteffenBrand\InTime
 */
class Years
{

    const IN_DAYS = 365;
    const IN_WEEKS = 52;
    const IN_HOURS = self::IN_DAYS * 24;
    const IN_MINUTES = self::IN_HOURS * 60;
    const IN_SECONDS = self::IN_MINUTES * 60;
    const IN_MILLISECONDS = self::IN_SECONDS * 1000;
    const IN_MICROSECONDS = self::IN_MILLISECONDS * 1000;

}