<?php

include('includes/lab12b-test01.inc.php');

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  
    <title>Lab 12b</title>   
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800" rel="stylesheet">   
    <link rel="stylesheet" href="css/weather-icons.min.css">
        
    <link rel="stylesheet" href="css/lab12b-test01.css">
</head>
<body>
<main class="grid-container">

   <?php
        cityBox($weatherData);
   ?>
</main>   
</body>
</html>