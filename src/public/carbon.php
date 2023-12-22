<?php
require '../vendor/autoload.php';

use Carbon\Carbon;

$dt = Carbon::now();
echo $dt->year;
echo '<br>';
echo $dt->month;
echo '<br>';
echo $dt->day;
echo '<br>';
echo $dt->hour;
echo '<br>';
echo $dt->minute;
echo '<br>';
echo $dt->second;
echo '<br>';
echo $dt->addYear();
echo '<br>';
echo $dt->subYear();
echo '<br>';
echo $dt->subMonth();
echo '<br>';
echo $dt->subHour();
echo '<br>';
echo $dt->addMinute();
echo '<br>';
echo $dt->subSecond();
echo '<br>';
echo $dt->addMonth();
echo '<br>';
echo $dt->addYear();
echo '<br>';
echo '<br>';
echo '<br>';
