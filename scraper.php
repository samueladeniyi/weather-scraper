<?php
error_reporting(0);
$city=$_GET['city'];
$city=str_replace(" ","", $city);
$contents=file_get_contents("https://www.weather-forecast.com/locations/".$city."/forecasts/latest");

preg_match('/3 days\)<\/span><p class="b-forecast__table-description-content"><span class="phrase">(.*?)</s', $contents, $matches);

echo $matches[1];

 ?>
