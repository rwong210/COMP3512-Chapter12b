<?php

/* each element in this associative array contains three values:
       [0] - current temperature
       [1] - current condition
       [2] - 5 day forecast associative array  
*/
$weatherData = [
    // key        value1  value2 value3(subkey)   
    "Chicago" => [45, "fog",   ["Mon" => [44, "fog"], "Tue" => [42, "sleet"], "Wed" => [40, "rain"], "Thu" => [44, "cloudy"], "Fri" => [45, "cloudy"]]],
    "Paris" =>   [73, "sunny", ["Mon" => [75, "sunny"], "Tue" => [75, "sunny"], "Wed" => [68, "cloudy"], "Thu" => [66, "cloudy"], "Fri" => [60, "rain"]]],
    "Calgary" => [-8, "snow",  ["Mon" => [-7, "snow"], "Tue" => [-10, "snow"], "Wed" => [-3, "sleet"], "Thu" => [0, "cloudy"], "Fri" => [3, "sunny"]]]
];

// create a city box
function cityBox($weatherData)
{
    foreach ($weatherData as $key => $info) {
        echo "<article class='box'><h1>$key</h1><div class='weather'>";
        $temp = $info[0];
        $condition = $info[1];
        $fiveDay = $info[2];
        echo "<img src='images/" . $key . ".jpg'/>";
        echo "<div><h2>$temp</h2><p>$condition</p></div></div><section>";
        fiveDay($fiveDay);
        echo "</section></article>";
    }
}

// loop through 5 day forecast
function fiveDay($array)
{
    foreach ($array as $key => $value) {
        $day = $key;
        $dTemp = $value[0];
        $dCondtion = $value[1];

        echo "<div><h3>$day</h3>";
        echo "<p><i class='wi wi-day-$dCondtion'></i></p>";
        echo "<p>$dTemp</p></div>";
    }
}
