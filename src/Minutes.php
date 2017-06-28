<?php

namespace SteffenBrand\InTime;

/**
 * Formulas to convert minutes to seconds, milliseconds and microseconds.
 *
 * @package SteffenBrand\InTime
 */
class Minutes
{
    const IN_SECONDS = 60;
    const IN_MILLISECONDS = self::IN_SECONDS * 1000;
    const IN_MICROSECONDS = self::IN_MILLISECONDS * 1000;
}