<?php

namespace SteffenBrand\InTime\Test;

use PHPUnit_Framework_TestCase;
use SteffenBrand\InTime\Days;
use SteffenBrand\InTime\Hours;
use SteffenBrand\InTime\Minutes;
use SteffenBrand\InTime\Seconds;
use SteffenBrand\InTime\Weeks;
use SteffenBrand\InTime\Years;

/**
 * Class InTimeTest
 *
 * @package SteffenBrand\InTime\Test
 */
class InTimeTest extends PHPUnit_Framework_TestCase
{

    /**
     *
     */
    public function testBasicConversions()
    {
        $this->assertEquals(730, 2 * Years::IN_DAYS);
        $this->assertEquals(14, 2 * Weeks::IN_DAYS);
        $this->assertEquals(48, 2 * Days::IN_HOURS);
        $this->assertEquals(120, 2 * Hours::IN_MINUTES);
        $this->assertEquals(180, 3 * Minutes::IN_SECONDS);
        $this->assertEquals(2000, 2 * Seconds::IN_MILLISECONDS);
        $this->assertEquals(2000000, 2 * Seconds::IN_MICROSECONDS);
    }

}
