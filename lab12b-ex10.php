<?php

include 'includes/simple-data.inc.php';

// check if query string exists, if it does return only the data for a single book
$data = $books;
if (isset($_GET['isbn'])) {

    // check if the ISBN exists in our data
    $found = null;
    foreach ($books as $b) {
        if ($b['isbn'] == $_GET['isbn']) {
            $found = $b;
        }
    }
    if (isset($found)) {
        $data = $found;
    } else {
        header("Location: lab12b-error.php");
    }
}

/* Content-Type http header is used to tell the browser what kind of content it is about to receive. 
The json_encode() function converts a PHP associative array into JSON. */
header('Content-Type: application/json');
echo json_encode($data, JSON_NUMERIC_CHECK + JSON_PRETTY_PRINT);
