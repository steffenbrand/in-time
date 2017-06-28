<?php

namespace SteffenBrand\InTime;

/**
 * Formulas to convert days to hours, minutes, seconds, milliseconds and microseconds.
 *
 * @package SteffenBrand\InTime
 */
class Days
{
    const IN_HOURS = 24;
    const IN_MINUTES = self::IN_HOURS * 60;
    const IN_SECONDS = self::IN_MINUTES * 60;
    const IN_MILLISECONDS = self::IN_SECONDS * 1000;
    const IN_MICROSECONDS = self::IN_MILLISECONDS * 1000;
}