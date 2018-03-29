# InTime

[![Build](https://travis-ci.org/steffenbrand/in-time.svg?branch=master)](https://travis-ci.org/steffenbrand/in-time)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/steffenbrand/in-time/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/steffenbrand/in-time/?branch=master)
[![Latest Stable Version](https://poser.pugx.org/steffenbrand/in-time/version)](https://packagist.org/packages/steffenbrand/in-time)
[![Latest Unstable Version](https://poser.pugx.org/steffenbrand/in-time/v/unstable)](//packagist.org/packages/steffenbrand/in-time)
[![Total Downloads](https://poser.pugx.org/steffenbrand/in-time/downloads)](https://packagist.org/packages/steffenbrand/in-time)
[![License](https://poser.pugx.org/steffenbrand/in-time/license)](https://github.com/steffenbrand/in-time/blob/master/LICENSE.md)
[![composer.lock available](https://poser.pugx.org/steffenbrand/in-time/composerlock)](https://github.com/steffenbrand/in-time/blob/master/composer.lock)

Helper to convert years, days, hours, minutes, seconds and milliseconds to smaller time units.

* [InTime on Packagist](https://packagist.org/packages/steffenbrand/in-time)
* [InTime on GitHub](https://github.com/steffenbrand/in-time)

## How to install

```
composer require steffenbrand/in-time
```

## How to use

```php
$a = 2 * Years::IN_DAYS; // 730
$b = 2 * Weeks::IN_DAYS; // 14
$c = 2 * Days::IN_HOURS; // 48
$d = 2 * Hours::IN_MINUTES; // 120
$e = 3 * Minutes::IN_SECONDS; // 180
$f = 2 * Seconds::IN_MILLISECONDS; // 2000
$g = 2 * Seconds::IN_MICROSECONDS; // 2000000
```