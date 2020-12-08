<?php

use Carbon\Carbon;

require "vendor/autoload.php";

printf("Right now is %s", Carbon::now()->toDateTimeString());
echo "<br>";
printf("Right now in Vancouver is %s", Carbon::now('America/Vancouver')); // automatically converted to string


$tomorrow = Carbon::now()->addDay();
$lastWeek = Carbon::now()->subWeek();

echo "<hr>";
echo "<br>";
printf("Carbon embed 822 languages:");
echo "<br>";
echo $tomorrow->locale('fr')->isoFormat('dddd, MMMM Do YYYY, h:mm');
echo "<br>";
echo $tomorrow->locale('ar')->isoFormat('dddd, MMMM Do YYYY, h:mm');

echo "<br>";
echo "<br>";
echo $officialDate = Carbon::now()->toRfc2822String();
echo "<br>";
echo "<br>";
echo $howOldAmI = Carbon::createFromDate(1975, 5, 21)->age . " ans";
echo "<br>";
echo "<br>";
echo $noonTodayLondonTime = Carbon::createFromTime(12, 0, 0, 'Europe/London');
echo "<br>";
echo "<br>";
echo $internetWillBlowUpOn = Carbon::create(2038, 01, 19, 3, 14, 7, 'GMT');
echo "<br>";
echo "<br>";
if (Carbon::now()->isWeekend()) {
    echo 'Party!';
}
echo Carbon::now()->subMinutes(2)->diffForHumans(); // '2 minutes ago'

// Want to know more about diffForHumans? Double-click on the method name!